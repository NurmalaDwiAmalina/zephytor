@extends('layouts.dashboard')
@section('title', 'Invoices')
@section('page-title', 'Invoices')

@section('content')
<div class="dash-page">

  <div class="page-header">
    <div>
      <h2 class="page-h">Invoices</h2>
      <p class="page-sub">Riwayat semua tagihan dan status pembayaran.</p>
    </div>
  </div>

  @if($invoices->isEmpty())
    <div class="empty-state-lg">
      <div class="empty-icon-lg">📄</div>
      <h3>Belum Ada Invoice</h3>
      <p>Invoice akan muncul setelah admin membuat tagihan untuk pesananmu.</p>
    </div>
  @else
    <div class="table-panel">
      <table class="data-table">
        <thead>
          <tr>
            <th>No. Invoice</th>
            <th>Pesanan</th>
            <th>Paket</th>
            <th>Jumlah</th>
            <th>Status</th>
            <th>Jatuh Tempo</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($invoices as $invoice)
          <tr>
            <td><span class="code-text">{{ $invoice->invoice_number }}</span></td>
            <td><span class="code-text small">{{ $invoice->order->order_number }}</span></td>
            <td>{{ $invoice->order->package->name }}</td>
            <td><strong>{{ $invoice->formatted_amount }}</strong></td>
            <td><span class="status-badge" style="--color: {{ $invoice->status_color }}">{{ $invoice->status_label }}</span></td>
            <td>
              @if($invoice->due_date)
                {{ $invoice->due_date->format('d M Y') }}
              @else
                <span class="muted">—</span>
              @endif
            </td>
            <td>
              <a href="/dashboard/invoices/{{ $invoice->id }}" class="btn btn-sm btn-outline">Lihat</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="pagination-wrap">{{ $invoices->links() }}</div>
  @endif

</div>
@endsection
