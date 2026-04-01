@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="dash-page">

  <!-- Welcome banner -->
  <div class="welcome-banner">
    <div class="welcome-content">
      <div class="welcome-avatar">
        @if(auth()->user()->avatar)
          <img src="{{ auth()->user()->avatar }}" alt="Avatar">
        @else
          <div class="avatar-fallback">{{ substr(auth()->user()->name, 0, 1) }}</div>
        @endif
      </div>
      <div>
        <div class="welcome-label">👋 Halo,</div>
        <div class="welcome-name">{{ auth()->user()->name }}</div>
        <div class="welcome-sub">Apa yang mau kita kerjakan hari ini?</div>
      </div>
    </div>
    <a href="/dashboard/orders/create" class="btn btn-primary">+ Buat Pesanan Baru</a>
  </div>

  <!-- Stats -->
  <div class="stats-grid">
    <div class="stat-card">
      <div class="stat-icon">📋</div>
      <div class="stat-body">
        <div class="stat-value">{{ $totalOrders }}</div>
        <div class="stat-label">Total Pesanan</div>
      </div>
    </div>
    <div class="stat-card">
      <div class="stat-icon">⚡</div>
      <div class="stat-body">
        <div class="stat-value">{{ $activeOrders }}</div>
        <div class="stat-label">Pesanan Aktif</div>
      </div>
    </div>
    <div class="stat-card">
      <div class="stat-icon">📄</div>
      <div class="stat-body">
        <div class="stat-value">{{ $unpaidInvoices }}</div>
        <div class="stat-label">Invoice Belum Dibayar</div>
      </div>
    </div>
  </div>

  <!-- Info Pembayaran -->
  <div style="background:linear-gradient(135deg,#f0fdf4,#eff6ff);border:1px solid #bbf7d0;border-radius:14px;padding:16px 20px;margin-bottom:24px;display:flex;align-items:center;gap:16px;flex-wrap:wrap;">
    <div style="font-size:1.5rem;">💳</div>
    <div style="flex:1;">
      <div style="font-weight:700;font-size:0.95rem;color:#111;margin-bottom:2px;">Pembayaran Mudah & Fleksibel</div>
      <div style="font-size:0.82rem;color:#555;">Kami menerima pembayaran via <strong>QRIS</strong>, <strong>GoPay</strong>, <strong>OVO</strong>, <strong>Dana</strong>, <strong>ShopeePay</strong>, <strong>m-Banking</strong>, dan <strong>Kartu Kredit/Debit</strong></div>
    </div>
  </div>

  <div class="dash-two-col">
    <!-- Recent Orders -->
    <div class="dash-panel">
      <div class="panel-header">
        <h3 class="panel-title">Pesanan Terbaru</h3>
        <a href="/dashboard/orders" class="panel-link">Lihat Semua →</a>
      </div>
      @if($recentOrders->isEmpty())
        <div class="empty-state">
          <div class="empty-icon">📋</div>
          <p>Belum ada pesanan</p>
          <a href="/dashboard/orders/create" class="btn btn-sm">Buat Pesanan</a>
        </div>
      @else
        <div class="order-list">
          @foreach($recentOrders as $order)
          <div class="order-item">
            <div class="order-meta">
              <span class="order-number">{{ $order->order_number }}</span>
              <span class="order-package">{{ $order->package->name }}</span>
            </div>
            <div class="order-right">
              <span class="status-badge" style="--color: {{ $order->status_color }}">{{ $order->status_label }}</span>
              <span class="order-date">{{ $order->created_at->format('d M Y') }}</span>
            </div>
          </div>
          @endforeach
        </div>
      @endif
    </div>

    <!-- Recent Invoices -->
    <div class="dash-panel">
      <div class="panel-header">
        <h3 class="panel-title">Invoice Terbaru</h3>
        <a href="/dashboard/invoices" class="panel-link">Lihat Semua →</a>
      </div>
      @if($invoices->isEmpty())
        <div class="empty-state">
          <div class="empty-icon">📄</div>
          <p>Belum ada invoice</p>
        </div>
      @else
        <div class="invoice-list">
          @foreach($invoices as $invoice)
          <div class="invoice-item">
            <div class="invoice-meta">
              <span class="invoice-number">{{ $invoice->invoice_number }}</span>
              <span class="invoice-package">{{ $invoice->order->package->name }}</span>
            </div>
            <div class="invoice-right">
              <span class="invoice-amount">{{ $invoice->formatted_amount }}</span>
              <span class="status-badge" style="--color: {{ $invoice->status_color }}">{{ $invoice->status_label }}</span>
            </div>
          </div>
          @endforeach
        </div>
      @endif
    </div>
  </div>

  <!-- Packages -->
  <div class="dash-panel" style="margin-top: 24px;">
    <div class="panel-header">
      <h3 class="panel-title">Pilih Paket</h3>
      <span class="panel-sub">Langsung pesan tanpa keluar dashboard</span>
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
          @foreach(array_slice($pkg->features, 0, 4) as $feat)
          <li>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            {{ $feat }}
          </li>
          @endforeach
          @if(count($pkg->features) > 4)
          <li class="feat-more">+{{ count($pkg->features) - 4 }} fitur lainnya</li>
          @endif
        </ul>
        @if($pkg->guarantee)
          <div class="pkg-guarantee">🛡 {{ $pkg->guarantee }}</div>
        @endif
        <a href="/dashboard/orders/create?package_id={{ $pkg->id }}" class="btn {{ $pkg->is_popular ? 'btn-primary' : 'btn-outline' }} btn-full">Pesan Sekarang</a>
      </div>
      @endforeach
    </div>
  </div>

</div>
@endsection
