@extends('layouts.dashboard')
@section('title', 'ZephyTool')
@section('page-title', 'ZephyTool')

@section('content')
<div class="dash-page">

  <div class="page-header">
    <div>
      <h2 class="page-h">⚡ ZephyTool</h2>
      <p class="page-sub">Generate website siap download dalam hitungan detik.</p>
    </div>
    <div class="tool-badge">BETA</div>
  </div>

  <div class="tool-intro-banner">
    <div class="tool-intro-icon">🛠</div>
    <div>
      <div class="tool-intro-title">Buat Website Instan</div>
      <div class="tool-intro-desc">Isi detail bisnis kamu, pilih template, dan download file HTML siap pakai — gratis untuk semua user terdaftar.</div>
    </div>
  </div>

  <div class="tool-layout">
    <!-- Form -->
    <div class="dash-panel">
      <h3 class="panel-title" style="margin-bottom: 24px;">Detail Website</h3>

      <form action="/dashboard/zephytool/generate" method="POST" id="toolForm">
        @csrf

        <div class="form-grid-2">
          <div class="form-group">
            <label class="form-label">Nama Bisnis *</label>
            <input type="text" name="business_name" class="form-control" placeholder="Contoh: Kopi Nusantara" value="{{ old('business_name') }}" required>
            @error('business_name')<span class="form-error">{{ $message }}</span>@enderror
          </div>
          <div class="form-group">
            <label class="form-label">Template *</label>
            <select name="template" class="form-control" id="templateSelect">
              <option value="landing" {{ old('template') == 'landing' ? 'selected' : '' }}>Landing Page</option>
              <option value="profile" {{ old('template') == 'profile' ? 'selected' : '' }}>Company Profile</option>
              <option value="portfolio" {{ old('template') == 'portfolio' ? 'selected' : '' }}>Portfolio</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="form-label">Tagline *</label>
          <input type="text" name="tagline" class="form-control" placeholder="Contoh: Kopi Premium, Cita Rasa Lokal" value="{{ old('tagline') }}" required>
          @error('tagline')<span class="form-error">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
          <label class="form-label">Deskripsi Bisnis *</label>
          <textarea name="description" class="form-control" rows="3" placeholder="Ceritakan tentang bisnis kamu secara singkat..." required>{{ old('description') }}</textarea>
          @error('description')<span class="form-error">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
          <label class="form-label">Layanan / Produk *</label>
          <input type="text" name="services" class="form-control" placeholder="Pisahkan dengan koma. Contoh: Kopi Susu, Cappuccino, Cold Brew, Snack" value="{{ old('services') }}" required>
          <span class="form-hint">Pisahkan dengan koma</span>
          @error('services')<span class="form-error">{{ $message }}</span>@enderror
        </div>

        <div class="form-grid-2">
          <div class="form-group">
            <label class="form-label">Nomor WhatsApp</label>
            <input type="text" name="contact_phone" class="form-control" placeholder="6281234567890" value="{{ old('contact_phone') }}">
          </div>
          <div class="form-group">
            <label class="form-label">Email</label>
            <input type="email" name="contact_email" class="form-control" placeholder="hello@bisnis.com" value="{{ old('contact_email') }}">
          </div>
        </div>

        <div class="form-grid-2">
          <div class="form-group">
            <label class="form-label">Warna Utama</label>
            <div class="color-input-wrap">
              <input type="color" name="color_primary" class="color-picker" value="{{ old('color_primary', '#000000') }}" id="colorPrimary">
              <input type="text" class="form-control color-hex" id="colorPrimaryHex" value="{{ old('color_primary', '#000000') }}" placeholder="#000000">
            </div>
          </div>
          <div class="form-group">
            <label class="form-label">Warna Sekunder</label>
            <div class="color-input-wrap">
              <input type="color" name="color_secondary" class="color-picker" value="{{ old('color_secondary', '#ffffff') }}" id="colorSecondary">
              <input type="text" class="form-control color-hex" id="colorSecondaryHex" value="{{ old('color_secondary', '#ffffff') }}" placeholder="#ffffff">
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-full" id="generateBtn">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
          Generate & Download Website
        </button>
      </form>
    </div>

    <!-- Preview info -->
    <div>
      <div class="dash-panel">
        <div class="panel-title" style="margin-bottom: 16px;">Yang Kamu Dapatkan</div>
        <ul class="feature-checklist">
          <li><span class="check-icon">✓</span> File HTML lengkap siap upload</li>
          <li><span class="check-icon">✓</span> Desain responsif mobile-friendly</li>
          <li><span class="check-icon">✓</span> Font premium Google Fonts</li>
          <li><span class="check-icon">✓</span> Navigasi, hero, layanan, kontak</li>
          <li><span class="check-icon">✓</span> Tombol WhatsApp & Email</li>
          <li><span class="check-icon">✓</span> Background animasi dot grid</li>
          <li><span class="check-icon">✓</span> 100% gratis, tidak ada watermark</li>
        </ul>
      </div>

      <div class="dash-panel" style="margin-top: 16px;">
        <div class="panel-title" style="margin-bottom: 16px;">Template Preview</div>
        <div class="template-previews">
          <div class="tmpl-prev active" data-tmpl="landing">
            <div class="tmpl-thumb">
              <div class="tmpl-bar"></div>
              <div class="tmpl-hero"></div>
              <div class="tmpl-row"></div>
            </div>
            <span>Landing Page</span>
          </div>
          <div class="tmpl-prev" data-tmpl="profile">
            <div class="tmpl-thumb">
              <div class="tmpl-bar"></div>
              <div class="tmpl-hero small"></div>
              <div class="tmpl-grid"></div>
            </div>
            <span>Company Profile</span>
          </div>
          <div class="tmpl-prev" data-tmpl="portfolio">
            <div class="tmpl-thumb">
              <div class="tmpl-bar"></div>
              <div class="tmpl-hero small"></div>
              <div class="tmpl-grid"></div>
            </div>
            <span>Portfolio</span>
          </div>
        </div>
      </div>

      <div class="dash-panel upgrade-panel" style="margin-top: 16px;">
        <div class="upgrade-icon">🚀</div>
        <div class="upgrade-title">Mau yang Lebih Premium?</div>
        <div class="upgrade-desc">Pesan paket Zephytor untuk website custom, SEO, domain, dan support penuh dari tim kami.</div>
        <a href="/dashboard/orders/create" class="btn btn-primary btn-full" style="margin-top: 16px;">Lihat Paket Kami</a>
      </div>
    </div>
  </div>

</div>

<script>
// Sync color pickers with text input
document.getElementById('colorPrimary').addEventListener('input', function() {
  document.getElementById('colorPrimaryHex').value = this.value;
});
document.getElementById('colorSecondary').addEventListener('input', function() {
  document.getElementById('colorSecondaryHex').value = this.value;
});

// Template selection sync
document.querySelectorAll('.tmpl-prev').forEach(el => {
  el.addEventListener('click', function() {
    document.querySelectorAll('.tmpl-prev').forEach(e => e.classList.remove('active'));
    this.classList.add('active');
    document.getElementById('templateSelect').value = this.dataset.tmpl;
  });
});
document.getElementById('templateSelect').addEventListener('change', function() {
  document.querySelectorAll('.tmpl-prev').forEach(el => {
    el.classList.toggle('active', el.dataset.tmpl === this.value);
  });
});

// Loading state
document.getElementById('toolForm').addEventListener('submit', function() {
  const btn = document.getElementById('generateBtn');
  btn.disabled = true;
  btn.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="animation:spin 1s linear infinite"><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" opacity=".3"/><path d="M21 12a9 9 0 00-9-9"/></svg> Generating...';
});
</script>
<style>@keyframes spin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }</style>
@endsection
