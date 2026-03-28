@extends('layouts.admin')
@section('title', $invoice->invoice_number)
@section('page-title', 'Detail Invoice')

@section('content')
<div class="dash-page">

  <div class="page-header">
    <div>
      <a href="/admin/invoices" class="back-link">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
        Kembali
      </a>
      <h2 class="page-h">{{ $invoice->invoice_number }}</h2>
    </div>
    <div style="display:flex;gap:10px;align-items:center;">
      <span class="status-badge lg" style="--color: {{ $invoice->status_color }}">{{ $invoice->status_label }}</span>
    </div>
  </div>

  <div class="invoice-admin-grid">

    <!-- Invoice Document -->
    <div class="invoice-doc">
      <div class="inv-header">
        <div class="inv-brand">
          <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><polygon points="16,2 30,28 2,28" fill="currentColor"/></svg>
          <span>Zephytor</span>
        </div>
        <div class="inv-meta">
          <div class="inv-meta-row"><span>No. Invoice</span><strong>{{ $invoice->invoice_number }}</strong></div>
          <div class="inv-meta-row"><span>No. Order</span><span class="code-text">{{ $invoice->order->order_number }}</span></div>
          <div class="inv-meta-row"><span>Dibuat</span><span>{{ $invoice->created_at->format('d M Y') }}</span></div>
          @if($invoice->due_date)
          <div class="inv-meta-row"><span>Jatuh Tempo</span><span>{{ $invoice->due_date->format('d M Y') }}</span></div>
          @endif
        </div>
      </div>

      <div class="inv-parties">
        <div class="inv-party">
          <div class="inv-party-label">Dari</div>
          <div class="inv-party-name">Zephytor</div>
          <div class="inv-party-sub">Digital Agency Indonesia</div>
        </div>
        <div class="inv-party">
          <div class="inv-party-label">Kepada</div>
          <div class="inv-party-name">{{ $invoice->user->name }}</div>
          <div class="inv-party-sub">{{ $invoice->user->email }}</div>
        </div>
      </div>

      <table class="inv-table">
        <thead>
          <tr><th>Deskripsi</th><th style="text-align:right">Jumlah</th></tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <strong>{{ $invoice->order->package->name }}</strong><br>
              <small class="muted">{{ $invoice->order->package->description }}</small>
            </td>
            <td style="text-align:right"><strong>{{ $invoice->formatted_amount }}</strong></td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="inv-total">
            <td>Total Pembayaran</td>
            <td style="text-align:right"><strong>{{ $invoice->formatted_amount }}</strong></td>
          </tr>
        </tfoot>
      </table>

      @if($invoice->notes)
        <div class="inv-notes"><strong>Catatan:</strong> {{ $invoice->notes }}</div>
      @endif

      @if($invoice->paid_at)
      <div class="inv-paid-stamp">
        <div class="paid-stamp">✓ LUNAS</div>
        <div class="paid-date">Dibayar pada {{ $invoice->paid_at->format('d M Y, H:i') }}</div>
      </div>
      @endif

      <div class="inv-footer">Terima kasih telah mempercayai Zephytor. 🚀</div>
    </div>

    <!-- Admin actions -->
    <div>
      <div class="dash-panel">
        <div class="panel-title" style="margin-bottom:16px">Update Status</div>
        <form action="/admin/invoices/{{ $invoice->id }}/status" method="POST">
          @csrf @method('PUT')
          <div class="form-group">
            <label class="form-label">Status Invoice</label>
            <select name="status" class="form-control">
              <option value="unpaid" {{ $invoice->status == 'unpaid' ? 'selected' : '' }}>Belum Dibayar</option>
              <option value="paid" {{ $invoice->status == 'paid' ? 'selected' : '' }}>Lunas</option>
              <option value="overdue" {{ $invoice->status == 'overdue' ? 'selected' : '' }}>Jatuh Tempo</option>
              <option value="cancelled" {{ $invoice->status == 'cancelled' ? 'selected' : '' }}>Dibatalkan</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary btn-full">Update Status</button>
        </form>
      </div>

      <div class="dash-panel" style="margin-top:16px">
        <div class="panel-title" style="margin-bottom:12px">Info Pesanan</div>
        <div class="detail-row"><span>No. Order</span><span class="code-text">{{ $invoice->order->order_number }}</span></div>
        <div class="detail-row"><span>Status Order</span><span class="status-badge" style="--color: {{ $invoice->order->status_color }}">{{ $invoice->order->status_label }}</span></div>
        <div style="margin-top:12px;">
          <a href="/admin/orders/{{ $invoice->order->id }}" class="btn btn-outline btn-full">Lihat Detail Order →</a>
        </div>
      </div>
    </div>

  </div>

</div>
@endsection
