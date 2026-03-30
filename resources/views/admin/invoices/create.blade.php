@extends('layouts.admin')
@section('title', 'Buat Invoice')
@section('page-title', 'Buat Invoice')

@section('content')
<div class="dash-page">

  <div class="page-header">
    <div>
      <a href="/admin/invoices" class="back-link">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
        Kembali
      </a>
      <h2 class="page-h">Buat Invoice Baru</h2>
    </div>
  </div>

  <div class="form-panel-wrap">
    <div class="dash-panel">
      <form action="/admin/invoices" method="POST">
        @csrf

        <div class="form-group">
          <label class="form-label">Pilih Pesanan *</label>
          <select name="order_id" class="form-control" id="orderSelect" required onchange="fillOrderDetails(this)">
            <option value="">— Pilih No. Order —</option>
            @foreach($orders as $order)
              <option value="{{ $order->id }}"
                data-price="{{ $order->total_price ?? $order->package->price ?? '' }}"
                data-user="{{ $order->customer_name ?? $order->user->name }}"
                data-package="{{ $order->package->name }}"
                {{ (isset($selectedOrder) && $selectedOrder->id == $order->id) || old('order_id') == $order->id ? 'selected' : '' }}>
                {{ $order->order_number }} — {{ $order->customer_name ?? $order->user->name }} ({{ $order->package->name }})
              </option>
            @endforeach
          </select>
          @error('order_id')<span class="form-error">{{ $message }}</span>@enderror
        </div>

        <div class="inv-preview-card" id="orderPreview" style="{{ isset($selectedOrder) ? '' : 'display:none' }}">
          <div class="inv-preview-row">
            <span>Klien</span>
            <strong id="prevUser">{{ $selectedOrder->customer_name ?? $selectedOrder->user->name ?? '' }}</strong>
          </div>
          <div class="inv-preview-row">
            <span>Paket</span>
            <strong id="prevPackage">{{ $selectedOrder->package->name ?? '' }}</strong>
          </div>
        </div>

        <div class="form-group">
          <label class="form-label">Jumlah (Rp) *</label>
          <input type="number" name="amount" class="form-control" id="amountInput"
            value="{{ old('amount', $selectedOrder->total_price ?? $selectedOrder->package->price ?? '') }}"
            placeholder="300000" required min="0">
          @error('amount')<span class="form-error">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
          <label class="form-label">Jatuh Tempo</label>
          <input type="date" name="due_date" class="form-control" value="{{ old('due_date', date('Y-m-d', strtotime('+7 days'))) }}">
        </div>

        <div class="form-group">
          <label class="form-label">Catatan</label>
          <textarea name="notes" class="form-control" rows="3" placeholder="Informasi pembayaran, rekening bank, atau catatan lainnya...">{{ old('notes') }}</textarea>
        </div>

        <div style="display:flex; gap:12px;">
          <button type="submit" class="btn btn-primary">Buat Invoice</button>
          <a href="/admin/invoices" class="btn btn-outline">Batal</a>
        </div>
      </form>
    </div>
  </div>

</div>

<script>
function fillOrderDetails(select) {
  const opt = select.options[select.selectedIndex];
  const preview = document.getElementById('orderPreview');
  if (opt.value) {
    document.getElementById('prevUser').textContent = opt.dataset.user;
    document.getElementById('prevPackage').textContent = opt.dataset.package;
    if (opt.dataset.price) {
      document.getElementById('amountInput').value = opt.dataset.price;
    }
    preview.style.display = '';
  } else {
    preview.style.display = 'none';
  }
}
</script>
@endsection
