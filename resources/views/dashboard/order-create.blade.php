@extends('layouts.dashboard')
@section('title', 'Buat Pesanan')
@section('page-title', 'Buat Pesanan')

@section('content')
<div class="dash-page">

  <div class="page-header">
    <div>
      <a href="/dashboard/orders" class="back-link">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
        Kembali
      </a>
      <h2 class="page-h">Buat Pesanan Baru</h2>
    </div>
  </div>

  <div class="order-create-grid">
    <!-- Package info -->
    <div class="pkg-card-big {{ $package->is_popular ? 'pkg-popular' : '' }}">
      @if($package->badge)
        <div class="pkg-badge">{{ $package->badge }}</div>
      @endif
      <div class="pkg-name">{{ $package->name }}</div>
      <div class="pkg-price">{{ $package->price_display }}</div>
      <div class="pkg-desc">{{ $package->description }}</div>
      <ul class="pkg-features">
        @foreach($package->features as $feat)
        <li>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
          {{ $feat }}
        </li>
        @endforeach
      </ul>
      @if($package->guarantee)
        <div class="pkg-guarantee">🛡 {{ $package->guarantee }}</div>
      @endif
    </div>

    <!-- Order form -->
    <div class="dash-panel">
      <h3 class="panel-title" style="margin-bottom: 24px;">Detail Pesanan</h3>

      <form action="/dashboard/orders" method="POST">
        @csrf
        <input type="hidden" name="package_id" value="{{ $package->id }}">

        <div class="form-group">
          <label class="form-label">Paket Dipilih</label>
          <div class="form-static">{{ $package->name }} — {{ $package->price_display }}</div>
        </div>

        <div class="form-group">
          <label class="form-label" for="customer_name">Nama Lengkap <span style="color:#ef4444">*</span></label>
          <input
            type="text"
            id="customer_name"
            name="customer_name"
            class="form-control"
            value="{{ old('customer_name', Auth::user()->name) }}"
            placeholder="Nama kamu"
            required
          >
          @error('customer_name')
            <span class="form-error">{{ $message }}</span>
          @enderror
        </div>

        <div class="form-group">
          <label class="form-label" for="phone">Nomor WhatsApp <span style="color:#ef4444">*</span></label>
          <input
            type="tel"
            id="phone"
            name="phone"
            class="form-control"
            value="{{ old('phone') }}"
            placeholder="Contoh: 08123456789"
            required
          >
          @error('phone')
            <span class="form-error">{{ $message }}</span>
          @enderror
        </div>

        <div class="form-group">
          <label class="form-label" for="notes">Catatan / Kebutuhan Khusus</label>
          <textarea
            id="notes"
            name="notes"
            class="form-control"
            rows="5"
            placeholder="Ceritakan bisnis kamu, target audience, warna yang diinginkan, referensi website, atau hal lain yang perlu kami ketahui..."
          >{{ old('notes') }}</textarea>
          @error('notes')
            <span class="form-error">{{ $message }}</span>
          @enderror
        </div>

        <div class="form-note">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
          Setelah order dibuat, tim kami akan menghubungi kamu via WhatsApp/email untuk proses selanjutnya.
        </div>

        <button type="submit" class="btn btn-primary btn-full">Kirim Pesanan Sekarang →</button>
      </form>
    </div>
  </div>

</div>
@endsection
