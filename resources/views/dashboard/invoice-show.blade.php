@extends('layouts.dashboard')
@section('title', $invoice->invoice_number)
@section('page-title', 'Detail Invoice')

@section('content')
<div class="dash-page">

  <div class="page-header" id="page-actions">
    <div>
      <a href="/dashboard/invoices" class="back-link">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
        Kembali ke Invoices
      </a>
      <h2 class="page-h">{{ $invoice->invoice_number }}</h2>
    </div>
    <div style="display:flex;align-items:center;gap:12px;">
      <span class="status-badge lg" style="--color: {{ $invoice->status_color }}">{{ $invoice->status_label }}</span>
      <button onclick="downloadPDF()" class="btn btn-primary btn-sm" id="downloadBtn" style="display:flex;align-items:center;gap:8px;">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
        Download PDF
      </button>
    </div>
  </div>

  <div id="invoice-printable">

    <div class="invoice-doc">
      <!-- Header -->
      <div class="inv-header">
        <div class="inv-brand">
          <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><polygon points="16,2 30,28 2,28" fill="currentColor"/></svg>
          <span>Zephytor</span>
        </div>
        <div class="inv-meta">
          <div class="inv-meta-row">
            <span>No. Invoice</span>
            <strong>{{ $invoice->invoice_number }}</strong>
          </div>
          <div class="inv-meta-row">
            <span>No. Order</span>
            <span class="code-text">{{ $invoice->order->order_number }}</span>
          </div>
          <div class="inv-meta-row">
            <span>Tanggal</span>
            <span>{{ $invoice->created_at->format('d M Y') }}</span>
          </div>
          @if($invoice->due_date)
          <div class="inv-meta-row">
            <span>Jatuh Tempo</span>
            <span>{{ $invoice->due_date->format('d M Y') }}</span>
          </div>
          @endif
        </div>
      </div>

      <!-- Client info -->
      <div class="inv-parties">
        <div class="inv-party">
          <div class="inv-party-label">Dari</div>
          <div class="inv-party-name">Zephytor</div>
          <div class="inv-party-sub">Digital Agency Indonesia</div>
        </div>
        <div class="inv-party">
          <div class="inv-party-label">Kepada</div>
          <div class="inv-party-name">{{ $invoice->order->customer_name ?? $invoice->user->name }}</div>
          <div class="inv-party-sub">{{ $invoice->user->email ?? '-' }}</div>
        </div>
      </div>

      <!-- Line items -->
      <table class="inv-table">
        <thead>
          <tr>
            <th>Deskripsi</th>
            <th style="text-align:right">Jumlah</th>
          </tr>
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
      <div class="inv-notes">
        <strong>Catatan:</strong> {{ $invoice->notes }}
      </div>
      @endif

      @if($invoice->paid_at)
      <div class="inv-paid-stamp">
        <div class="paid-stamp">✓ LUNAS</div>
        <div class="paid-date">Dibayar pada {{ $invoice->paid_at->format('d M Y, H:i') }}</div>
      </div>
      @endif

      <div class="inv-footer">
        Terima kasih telah mempercayai Zephytor untuk transformasi digital bisnis Anda. 🚀
      </div>
    </div>

  </div><!-- #invoice-printable -->

</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
function downloadPDF() {
  const btn = document.getElementById('downloadBtn');
  btn.disabled = true;
  btn.innerHTML = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="animation:spin 1s linear infinite"><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" opacity=".3"/><path d="M21 12a9 9 0 00-9-9"/></svg> Menyiapkan...';

  const element = document.getElementById('invoice-printable');
  const opt = {
    margin: [10, 10, 10, 10],
    filename: '{{ $invoice->invoice_number }}.pdf',
    image: { type: 'jpeg', quality: 0.98 },
    html2canvas: { scale: 2, useCORS: true, letterRendering: true },
    jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' },
    pagebreak: { mode: ['avoid-all', 'css', 'legacy'] }
  };

  html2pdf().set(opt).from(element).save().then(() => {
    btn.disabled = false;
    btn.innerHTML = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg> Download PDF';
  });
}
</script>
<style>
@keyframes spin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }

</style>
@endpush
