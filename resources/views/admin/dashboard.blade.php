@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('page-title', 'Admin Dashboard')

@section('content')
<div class="dash-page">

  <!-- Stats -->
  <div class="stats-grid stats-grid-lg">
    <div class="stat-card">
      <div class="stat-icon">📋</div>
      <div class="stat-body">
        <div class="stat-value">{{ $totalOrders }}</div>
        <div class="stat-label">Total Pesanan</div>
      </div>
    </div>
    <div class="stat-card stat-warn">
      <div class="stat-icon">⏳</div>
      <div class="stat-body">
        <div class="stat-value">{{ $pendingOrders }}</div>
        <div class="stat-label">Menunggu Konfirmasi</div>
      </div>
    </div>
    <div class="stat-card">
      <div class="stat-icon">📄</div>
      <div class="stat-body">
        <div class="stat-value">{{ $totalInvoices }}</div>
        <div class="stat-label">Total Invoice</div>
      </div>
    </div>
    <div class="stat-card stat-warn">
      <div class="stat-icon">💰</div>
      <div class="stat-body">
        <div class="stat-value">{{ $unpaidInvoices }}</div>
        <div class="stat-label">Invoice Belum Bayar</div>
      </div>
    </div>
    <div class="stat-card stat-success">
      <div class="stat-icon">✅</div>
      <div class="stat-body">
        <div class="stat-value">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</div>
        <div class="stat-label">Total Revenue</div>
      </div>
    </div>
    <div class="stat-card">
      <div class="stat-icon">👥</div>
      <div class="stat-body">
        <div class="stat-value">{{ $totalUsers }}</div>
        <div class="stat-label">Total User</div>
      </div>
    </div>
  </div>

  <!-- Quick actions -->
  <div class="quick-actions">
    <a href="/admin/invoices/create" class="qa-btn qa-primary">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
      Buat Invoice
    </a>
    <a href="/admin/packages/create" class="qa-btn">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg>
      Tambah Paket
    </a>
    <a href="/admin/orders?status=pending" class="qa-btn">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/></svg>
      Pesanan Pending
    </a>
  </div>

  <div class="dash-two-col">
    <!-- Recent Orders -->
    <div class="dash-panel">
      <div class="panel-header">
        <h3 class="panel-title">Pesanan Terbaru</h3>
        <a href="/admin/orders" class="panel-link">Lihat Semua →</a>
      </div>
      <div class="order-list">
        @foreach($recentOrders as $order)
        <div class="order-item">
          <div class="order-meta">
            <span class="order-number">{{ $order->order_number }}</span>
            <span class="order-package">{{ $order->user->name }} · {{ $order->package->name }}</span>
          </div>
          <div class="order-right">
            <span class="status-badge" style="--color: {{ $order->status_color }}">{{ $order->status_label }}</span>
            <a href="/admin/orders/{{ $order->id }}" class="link-icon">→</a>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <!-- Recent Invoices -->
    <div class="dash-panel">
      <div class="panel-header">
        <h3 class="panel-title">Invoice Terbaru</h3>
        <a href="/admin/invoices" class="panel-link">Lihat Semua →</a>
      </div>
      <div class="invoice-list">
        @foreach($recentInvoices as $invoice)
        <div class="invoice-item">
          <div class="invoice-meta">
            <span class="invoice-number">{{ $invoice->invoice_number }}</span>
            <span class="invoice-package">{{ $invoice->user->name }}</span>
          </div>
          <div class="invoice-right">
            <span class="invoice-amount">{{ $invoice->formatted_amount }}</span>
            <span class="status-badge" style="--color: {{ $invoice->status_color }}">{{ $invoice->status_label }}</span>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

</div>
@endsection
