@extends('layouts.admin')
@section('title', 'Buat Pesanan Manual')
@section('page-title', 'Buat Pesanan Manual')

@section('content')
<div class="dash-page">

  <div class="page-header">
    <div>
      <a href="/admin/orders" class="back-link">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
        Kembali
      </a>
      <h2 class="page-h">Buat Pesanan Manual</h2>
      <p class="page-sub">Input pesanan langsung dari admin tanpa perlu klien login.</p>
    </div>
  </div>

  <div class="order-create-grid">

    <!-- Preview paket -->
    <div class="dash-panel" id="pkg-preview" style="display:none;">
      <div class="panel-title" style="margin-bottom:16px">Paket Dipilih</div>
      <div id="pkg-name" style="font-size:1.1rem;font-weight:700;color:var(--text-h);margin-bottom:4px;"></div>
      <div id="pkg-price" style="font-size:0.9rem;color:var(--text-muted);margin-bottom:16px;"></div>
      <ul id="pkg-features" style="list-style:none;padding:0;margin:0;font-size:0.875rem;"></ul>
    </div>

    <div id="pkg-empty" class="dash-panel" style="display:flex;align-items:center;justify-content:center;min-height:200px;color:var(--text-muted);font-size:0.9rem;">
      Pilih paket untuk melihat detailnya
    </div>

    <!-- Form -->
    <div class="dash-panel">
      <h3 class="panel-title" style="margin-bottom:24px;">Detail Pesanan</h3>

      <form action="/admin/orders" method="POST">
        @csrf

        <div class="form-group">
          <label class="form-label">Paket <span style="color:#ef4444">*</span></label>
          <select name="package_id" id="package_id" class="form-control" required onchange="updatePackagePreview(this)">
            <option value="">— Pilih Paket —</option>
            @foreach($packages as $pkg)
              <option value="{{ $pkg->id }}"
                data-name="{{ $pkg->name }}"
                data-price="{{ $pkg->price_display }}"
                data-price-num="{{ $pkg->price }}"
                data-features="{{ implode('||', $pkg->features) }}"
                {{ old('package_id') == $pkg->id ? 'selected' : '' }}>
                {{ $pkg->name }} — {{ $pkg->price_display }}
              </option>
            @endforeach
          </select>
          @error('package_id')<span class="form-error">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
          <label class="form-label">Akun User <span style="color:var(--text-muted);font-weight:400;">(opsional)</span></label>
          <select name="user_id" id="user_id" class="form-control" onchange="fillUserName(this)">
            <option value="">— Klien belum punya akun —</option>
            @foreach($users as $u)
              <option value="{{ $u->id }}"
                data-name="{{ $u->name }}"
                {{ old('user_id') == $u->id ? 'selected' : '' }}>
                {{ $u->name }} ({{ $u->email }})
              </option>
            @endforeach
          </select>
          <span class="form-hint">Kosongkan jika klien belum daftar — akun akan dibuat otomatis dari nama &amp; nomor HP.</span>
          @error('user_id')<span class="form-error">{{ $message }}</span>@enderror
        </div>

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
          <div class="form-group">
            <label class="form-label" for="customer_name">Nama Klien <span style="color:#ef4444">*</span></label>
            <input type="text" id="customer_name" name="customer_name" class="form-control"
              value="{{ old('customer_name') }}" placeholder="Nama lengkap klien" required>
            @error('customer_name')<span class="form-error">{{ $message }}</span>@enderror
          </div>
          <div class="form-group">
            <label class="form-label" for="phone">Nomor WhatsApp <span style="color:#ef4444">*</span></label>
            <input type="tel" id="phone" name="phone" class="form-control"
              value="{{ old('phone') }}" placeholder="08xxxxxxxxxx" required>
            @error('phone')<span class="form-error">{{ $message }}</span>@enderror
          </div>
        </div>

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
          <div class="form-group">
            <label class="form-label">Status <span style="color:#ef4444">*</span></label>
            <select name="status" class="form-control" required>
              @foreach(['pending'=>'Menunggu Konfirmasi','in_progress'=>'Sedang Dikerjakan','completed'=>'Selesai','cancelled'=>'Dibatalkan'] as $val => $label)
                <option value="{{ $val }}" {{ old('status', 'pending') == $val ? 'selected' : '' }}>{{ $label }}</option>
              @endforeach
            </select>
            @error('status')<span class="form-error">{{ $message }}</span>@enderror
          </div>
          <div class="form-group">
            <label class="form-label" for="total_price">Harga Deal (Rp)</label>
            <input type="number" id="total_price" name="total_price" class="form-control"
              value="{{ old('total_price') }}" placeholder="Kosongkan = harga paket">
            <span class="form-hint">Kosongkan untuk pakai harga default paket.</span>
            @error('total_price')<span class="form-error">{{ $message }}</span>@enderror
          </div>
        </div>

        <div class="form-group">
          <label class="form-label" for="notes">Catatan / Brief Klien</label>
          <textarea id="notes" name="notes" class="form-control" rows="5"
            placeholder="Ceritakan kebutuhan klien, referensi, warna, dll...">{{ old('notes') }}</textarea>
          @error('notes')<span class="form-error">{{ $message }}</span>@enderror
        </div>

        <div style="display:flex;gap:12px;margin-top:8px;">
          <button type="submit" class="btn btn-primary">Buat Pesanan →</button>
          <a href="/admin/orders" class="btn btn-outline">Batal</a>
        </div>
      </form>
    </div>

  </div>
</div>
@endsection

@push('scripts')
<script>
const pkgData = {};
document.querySelectorAll('#package_id option[data-name]').forEach(opt => {
  pkgData[opt.value] = {
    name: opt.dataset.name,
    price: opt.dataset.price,
    priceNum: opt.dataset.priceNum,
    features: opt.dataset.features ? opt.dataset.features.split('||') : [],
  };
});

function updatePackagePreview(sel) {
  const pkg = pkgData[sel.value];
  const preview = document.getElementById('pkg-preview');
  const empty = document.getElementById('pkg-empty');

  if (!pkg) {
    preview.style.display = 'none';
    empty.style.display = 'flex';
    return;
  }

  document.getElementById('pkg-name').textContent = pkg.name;
  document.getElementById('pkg-price').textContent = pkg.price;
  document.getElementById('pkg-features').innerHTML = pkg.features.map(f =>
    `<li style="padding:4px 0;display:flex;gap:8px;align-items:flex-start;">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="flex-shrink:0;margin-top:2px"><polyline points="20 6 9 17 4 12"/></svg>
      <span>${f}</span>
    </li>`
  ).join('');

  // Auto-fill harga jika belum diisi manual
  const priceInput = document.getElementById('total_price');
  if (!priceInput.value && pkg.priceNum) {
    priceInput.value = pkg.priceNum;
  }

  preview.style.display = 'block';
  empty.style.display = 'none';
}

function fillUserName(sel) {
  const nameInput = document.getElementById('customer_name');
  if (!nameInput.value && sel.value) {
    nameInput.value = sel.options[sel.selectedIndex].dataset.name;
  }
}

// Trigger jika ada old value
const pkgSel = document.getElementById('package_id');
if (pkgSel.value) updatePackagePreview(pkgSel);
</script>
@endpush
