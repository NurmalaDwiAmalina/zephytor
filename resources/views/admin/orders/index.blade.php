@extends('layouts.admin')
@section('title', 'Kelola Pesanan')
@section('page-title', 'Kelola Pesanan')

@section('content')
<div class="dash-page">

  <div class="page-header">
    <div>
      <h2 class="page-h">Kelola Pesanan</h2>
      <p class="page-sub">Semua pesanan dari user.</p>
    </div>
    <div class="filter-tabs">
      <a href="/admin/orders" class="filter-tab {{ !request('status') ? 'active' : '' }}">Semua</a>
      <a href="/admin/orders?status=pending" class="filter-tab {{ request('status') == 'pending' ? 'active' : '' }}">Pending</a>
      <a href="/admin/orders?status=in_progress" class="filter-tab {{ request('status') == 'in_progress' ? 'active' : '' }}">Dikerjakan</a>
      <a href="/admin/orders?status=completed" class="filter-tab {{ request('status') == 'completed' ? 'active' : '' }}">Selesai</a>
    </div>
  </div>

  <div class="table-panel">
    <table class="data-table">
      <thead>
        <tr>
          <th>No. Order</th>
          <th>User</th>
          <th>Paket</th>
          <th>Harga</th>
          <th>Status</th>
          <th>Tanggal</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($orders as $order)
        <tr>
          <td><span class="code-text">{{ $order->order_number }}</span></td>
          <td>
            <div class="user-cell">
              @if($order->user->avatar)
                <img src="{{ $order->user->avatar }}" class="user-mini-avatar">
              @endif
              <div>
                <div class="user-cell-name">{{ $order->user->name }}</div>
                <div class="user-cell-email">{{ $order->user->email }}</div>
              </div>
            </div>
          </td>
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
          <td>
            <a href="/admin/orders/{{ $order->id }}" class="btn btn-sm btn-outline">Detail</a>
          </td>
        </tr>
        @empty
        <tr><td colspan="7" style="text-align:center;padding:40px;color:var(--text-muted)">Belum ada pesanan.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
  <div class="pagination-wrap">{{ $orders->links() }}</div>

</div>
@endsection
