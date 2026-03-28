@extends('layouts.admin')
@section('title', isset($package) ? 'Edit Paket' : 'Tambah Paket')
@section('page-title', isset($package) ? 'Edit Paket' : 'Tambah Paket')

@section('content')
<div class="dash-page">

  <div class="page-header">
    <div>
      <a href="/admin/packages" class="back-link">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
        Kembali
      </a>
      <h2 class="page-h">{{ isset($package) ? 'Edit Paket' : 'Tambah Paket Baru' }}</h2>
    </div>
  </div>

  <div class="form-panel-wrap">
    <div class="dash-panel">
      <form action="{{ isset($package) ? '/admin/packages/'.$package->id : '/admin/packages' }}" method="POST">
        @csrf
        @if(isset($package)) @method('PUT') @endif

        <div class="form-grid-2">
          <div class="form-group">
            <label class="form-label">Nama Paket *</label>
            <input type="text" name="name" class="form-control" placeholder="Contoh: Landing Page" value="{{ old('name', $package->name ?? '') }}" required>
            @error('name')<span class="form-error">{{ $message }}</span>@enderror
          </div>
          <div class="form-group">
            <label class="form-label">Tampilan Harga *</label>
            <input type="text" name="price_display" class="form-control" placeholder="Contoh: Rp 300rb" value="{{ old('price_display', $package->price_display ?? '') }}" required>
            @error('price_display')<span class="form-error">{{ $message }}</span>@enderror
          </div>
        </div>

        <div class="form-grid-2">
          <div class="form-group">
            <label class="form-label">Harga (angka, untuk invoice)</label>
            <input type="number" name="price" class="form-control" placeholder="300000" value="{{ old('price', $package->price ?? '') }}">
            <span class="form-hint">Kosongkan untuk harga custom/negosiasi</span>
          </div>
          <div class="form-group">
            <label class="form-label">Badge</label>
            <input type="text" name="badge" class="form-control" placeholder="Contoh: BEST SELLER" value="{{ old('badge', $package->badge ?? '') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="form-label">Deskripsi Paket</label>
          <textarea name="description" class="form-control" rows="2" placeholder="Deskripsi singkat paket ini...">{{ old('description', $package->description ?? '') }}</textarea>
        </div>

        <div class="form-group">
          <label class="form-label">Fitur Paket *</label>
          <textarea name="features" class="form-control" rows="8" placeholder="Satu fitur per baris, contoh:&#10;1 Halaman Responsif&#10;Copywriting Basic&#10;Admin Dashboard&#10;Domain Gratis" required>{{ old('features', isset($package) ? implode("\n", $package->features) : '') }}</textarea>
          <span class="form-hint">Satu fitur per baris</span>
          @error('features')<span class="form-error">{{ $message }}</span>@enderror
        </div>

        <div class="form-grid-2">
          <div class="form-group">
            <label class="form-label">Garansi</label>
            <input type="text" name="guarantee" class="form-control" placeholder="Contoh: Garansi 1 Bulan" value="{{ old('guarantee', $package->guarantee ?? '') }}">
          </div>
          <div class="form-group">
            <label class="form-label">Link WhatsApp</label>
            <input type="url" name="wa_link" class="form-control" placeholder="https://wa.me/6281..." value="{{ old('wa_link', $package->wa_link ?? '') }}">
          </div>
        </div>

        <div class="form-grid-3">
          <div class="form-group">
            <label class="form-label">Urutan Tampil</label>
            <input type="number" name="sort_order" class="form-control" placeholder="0" value="{{ old('sort_order', $package->sort_order ?? 0) }}">
          </div>
          <div class="form-group" style="display:flex; align-items:flex-end; padding-bottom:4px;">
            <label class="form-check">
              <input type="checkbox" name="is_popular" value="1" {{ old('is_popular', $package->is_popular ?? false) ? 'checked' : '' }}>
              <span>Tandai sebagai Popular</span>
            </label>
          </div>
          <div class="form-group" style="display:flex; align-items:flex-end; padding-bottom:4px;">
            <label class="form-check">
              <input type="checkbox" name="is_active" value="1" {{ old('is_active', $package->is_active ?? true) ? 'checked' : '' }}>
              <span>Paket Aktif</span>
            </label>
          </div>
        </div>

        <div style="display:flex; gap:12px; margin-top:8px;">
          <button type="submit" class="btn btn-primary">{{ isset($package) ? 'Simpan Perubahan' : 'Tambah Paket' }}</button>
          <a href="/admin/packages" class="btn btn-outline">Batal</a>
        </div>
      </form>
    </div>
  </div>

</div>
@endsection
