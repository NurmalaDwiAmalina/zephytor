@extends('layouts.admin')
@section('title', 'Kelola Invoices')
@section('page-title', 'Kelola Invoices')

@section('content')
<div class="dash-page">

  <div class="page-header">
    <div>
      <h2 class="page-h">Kelola Invoices</h2>
      <p class="page-sub">Buat dan kelola semua invoice untuk klien.</p>
    </div>
    <a href="/admin/invoices/create" class="btn btn-primary">+ Buat Invoice</a>
  </div>

  <div class="filter-tabs" style="margin-bottom:20px;">
    <a href="/admin/invoices" class="filter-tab {{ !request('status') ? 'active' : '' }}">Semua</a>
    <a href="/admin/invoices?status=unpaid" class="filter-tab {{ request('status') == 'unpaid' ? 'active' : '' }}">Belum Dibayar</a>
    <a href="/admin/invoices?status=paid" class="filter-tab {{ request('status') == 'paid' ? 'active' : '' }}">Lunas</a>
    <a href="/admin/invoices?status=overdue" class="filter-tab {{ request('status') == 'overdue' ? 'active' : '' }}">Jatuh Tempo</a>
  </div>

  <div class="table-panel">
    <table class="data-table">
      <thead>
        <tr>
          <th>No. Invoice</th>
          <th>Klien</th>
          <th>Paket</th>
          <th>Jumlah</th>
          <th>Status</th>
          <th>Jatuh Tempo</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($invoices as $invoice)
        <tr>
          <td><span class="code-text">{{ $invoice->invoice_number }}</span></td>
          <td>
            <div class="user-cell">
              @if($invoice->user->avatar)
                <img src="{{ $invoice->user->avatar }}" class="user-mini-avatar">
              @endif
              <div>
                <div class="user-cell-name">{{ $invoice->user->name }}</div>
                <div class="user-cell-email">{{ $invoice->user->email }}</div>
              </div>
            </div>
          </td>
          <td>{{ $invoice->order->package->name }}</td>
          <td><strong>{{ $invoice->formatted_amount }}</strong></td>
          <td><span class="status-badge" style="--color: {{ $invoice->status_color }}">{{ $invoice->status_label }}</span></td>
          <td>
            @if($invoice->due_date)
              <span class="{{ $invoice->status == 'unpaid' && $invoice->due_date->isPast() ? 'text-danger' : '' }}">
                {{ $invoice->due_date->format('d M Y') }}
              </span>
            @else
              <span class="muted">—</span>
            @endif
          </td>
          <td>
            <a href="/admin/invoices/{{ $invoice->id }}" class="btn btn-sm btn-outline">Detail</a>
          </td>
        </tr>
        @empty
        <tr><td colspan="7" style="text-align:center;padding:40px;color:var(--text-muted)">Belum ada invoice.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
  <div class="pagination-wrap">{{ $invoices->links() }}</div>

</div>
@endsection
