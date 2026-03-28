@extends('layouts.dashboard')
@section('title', 'Pesanan Saya')
@section('page-title', 'Pesanan Saya')

@section('content')
<div class="dash-page">

  <div class="page-header">
    <div>
      <h2 class="page-h">Pesanan Saya</h2>
      <p class="page-sub">Pantau status semua pesanan website kamu di sini.</p>
    </div>
    <a href="/dashboard/orders/create" class="btn btn-primary">+ Buat Pesanan</a>
  </div>

  @if($orders->isEmpty())
    <div class="empty-state-lg">
      <div class="empty-icon-lg">📋</div>
      <h3>Belum Ada Pesanan</h3>
      <p>Yuk mulai pesan website impianmu sekarang!</p>
      <a href="/dashboard/orders/create" class="btn btn-primary">Buat Pesanan Pertama</a>
    </div>
  @else
    <div class="table-panel">
      <table class="data-table">
        <thead>
          <tr>
            <th>No. Order</th>
            <th>Paket</th>
            <th>Harga</th>
            <th>Status</th>
            <th>Tanggal</th>
          </tr>
        </thead>
        <tbody>
          @foreach($orders as $order)
          <tr>
            <td><span class="code-text">{{ $order->order_number }}</span></td>
            <td>{{ $order->package->name }}</td>
            <td>
              @if($order->total_price)
                Rp {{ number_format($order->total_price, 0, ',', '.') }}
              @else
                <span class="muted">Custom</span>
              @endif
            </td>
            <td><span class="status-badge" style="--color: {{ $order->status_color }}">{{ $order->status_label }}</span></td>
            <td>{{ $order->created_at->format('d M Y') }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="pagination-wrap">{{ $orders->links() }}</div>
  @endif

  <!-- Packages section -->
  <div class="dash-panel" style="margin-top: 32px;">
    <div class="panel-header">
      <h3 class="panel-title">Pilih Paket Baru</h3>
    </div>
    <div class="packages-grid">
      @foreach($packages as $pkg)
      <div class="pkg-card {{ $pkg->is_popular ? 'pkg-popular' : '' }}">
        @if($pkg->badge)
          <div class="pkg-badge">{{ $pkg->badge }}</div>
        @endif
        <div class="pkg-name">{{ $pkg->name }}</div>
        <div class="pkg-price">{{ $pkg->price_display }}</div>
        <div class="pkg-desc">{{ $pkg->description }}</div>
        <ul class="pkg-features">
          @foreach($pkg->features as $feat)
          <li>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            {{ $feat }}
          </li>
          @endforeach
        </ul>
        @if($pkg->guarantee)
          <div class="pkg-guarantee">🛡 {{ $pkg->guarantee }}</div>
        @endif
        <a href="/dashboard/orders/create?package_id={{ $pkg->id }}" class="btn {{ $pkg->is_popular ? 'btn-primary' : 'btn-outline' }} btn-full">Pesan Paket Ini</a>
      </div>
      @endforeach
    </div>
  </div>

</div>
@endsection
