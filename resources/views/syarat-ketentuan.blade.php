<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Syarat &amp; Ketentuan — Zephytor</title>
  <link rel="stylesheet" href="{{ asset('css/landing.css') }}?v={{ time() }}">
  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
  <style>
    .snk-page { padding: 140px 0 100px; min-height: 100vh; }
    .snk-wrap { max-width: 820px; margin: 0 auto; padding: 0 24px; }
    .snk-page-header { margin-bottom: 48px; padding-bottom: 32px; border-bottom: 1px solid var(--border); }
    .snk-page-header h1 { font-size: 2.5rem; font-weight: 800; color: var(--text-h); margin-bottom: 8px; }
    .snk-page-header .meta { font-size: 0.9rem; color: var(--text-muted); }
    .snk-lead {
      background: rgba(0,0,0,0.03);
      border-left: 3px solid var(--text-h);
      padding: 16px 20px;
      border-radius: 0 10px 10px 0;
      font-style: italic;
      margin-bottom: 40px;
      font-size: 0.95rem;
    }
    body.dark-theme .snk-lead { background: rgba(255,255,255,0.04); }
    .snk-section { margin-bottom: 36px; }
    .snk-section h2 {
      font-size: 1rem;
      font-weight: 700;
      color: var(--text-h);
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-bottom: 12px;
    }
    .snk-section p, .snk-section li { font-size: 0.95rem; line-height: 1.8; color: var(--text-b); }
    .snk-section ul { padding-left: 20px; margin: 0; }
    .snk-section ul li { margin-bottom: 6px; }
    .snk-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 0.875rem; }
    .snk-table th { background: var(--text-h); color: var(--bg); padding: 10px 14px; text-align: left; font-weight: 700; }
    .snk-table td { padding: 10px 14px; border-bottom: 1px solid var(--border); vertical-align: top; }
    .snk-table tr:nth-child(even) td { background: rgba(0,0,0,0.02); }
    body.dark-theme .snk-table tr:nth-child(even) td { background: rgba(255,255,255,0.03); }
    .snk-contact {
      margin-top: 48px;
      padding: 24px;
      border: 1px solid var(--border);
      border-radius: 16px;
      text-align: center;
      font-size: 0.9rem;
    }
    .snk-contact strong { display: block; font-size: 1.1rem; margin-bottom: 8px; color: var(--text-h); }
  </style>
</head>
<body class="dark-theme">
  <div class="bg-mesh">
    <div class="mesh-orb orb-1"></div>
    <div class="mesh-orb orb-2"></div>
  </div>

  <div class="navbar-top" style="background: rgba(var(--bg-rgb), 0.8); backdrop-filter: blur(20px); border-bottom: 1px solid var(--border);">
    <div class="container">
      <a href="/" class="nav-logo">
        <span style="font-family: var(--font-h); font-size: 28px; font-weight: 800; color: var(--logo-color); letter-spacing: -1px;">Zephytor</span>
      </a>
      <div class="nav-menu">
        <a href="/#layanan" class="nav-link-item">LAYANAN</a>
        <a href="/#harga" class="nav-link-item">PAKET</a>
        <a href="/kontak" class="nav-link-item">KONTAK</a>
      </div>
      <a href="https://wa.me/{{ config('company.phone_wa') }}?text=Halo%20Zephytor,%20saya%20mau%20tanya-tanya%20nih%20seputar%20pembuatan%20website." class="btn btn-primary btn-sm">Konsultasi Gratis</a>
    </div>
  </div>

  <main class="snk-page">
    <div class="snk-wrap">

      <div class="snk-page-header">
        <h1>Syarat &amp; Ketentuan Layanan</h1>
        <p class="meta">Zephytor — Website Premium untuk Bisnis Indonesia &nbsp;·&nbsp; Versi 1.1 &nbsp;·&nbsp; Berlaku: Januari 2025 &nbsp;·&nbsp; Revisi: Maret 2025</p>
      </div>

      <div class="snk-lead">
        Dengan melakukan pembayaran DP atau menyatakan persetujuan, Klien dianggap telah membaca, memahami, dan menyetujui seluruh isi Syarat &amp; Ketentuan ini.
      </div>

      <div class="snk-section">
        <h2>1. Definisi</h2>
        <ul>
          <li><strong>"Penyedia Jasa"</strong> = Zephytor beserta seluruh tim dan afiliasinya.</li>
          <li><strong>"Klien"</strong> = individu, UMKM, atau entitas yang menggunakan layanan Zephytor.</li>
          <li><strong>"Proyek"</strong> = keseluruhan pekerjaan yang disepakati dalam satu sesi kerja sama.</li>
          <li><strong>"Revisi"</strong> = perubahan desain atau konten yang diminta Klien selama masa pengerjaan.</li>
          <li><strong>"Go-Live"</strong> = tanggal website resmi dipublikasikan ke publik.</li>
          <li><strong>"Masa Garansi"</strong> = periode purna jual sesuai paket, dihitung sejak tanggal Go-Live.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h2>2. Paket &amp; Harga Layanan</h2>
        <p>Zephytor menyediakan tiga paket resmi:</p>
        <table class="snk-table">
          <thead><tr><th>Paket</th><th>Harga</th><th>Garansi &amp; Isi</th></tr></thead>
          <tbody>
            <tr>
              <td><strong>Landing Page</strong></td>
              <td>Rp 300.000</td>
              <td>1 Bulan · 1 halaman responsif, copywriting, admin panel, tombol WA, domain .online/.site</td>
            </tr>
            <tr>
              <td><strong>Paket Premium</strong></td>
              <td>Rp 3.500.000</td>
              <td>3 Bulan · 5 halaman, high-conversion copywriting, 3 email bisnis, SEO dasar, domain .com/.id/.co.id</td>
            </tr>
            <tr>
              <td><strong>Enterprise</strong></td>
              <td>Menyesuaikan</td>
              <td>12 Bulan · Unlimited halaman, desain eksklusif, fitur custom, API, payment gateway, full SEO, email unlimited</td>
            </tr>
          </tbody>
        </table>
        <p>Harga dalam penawaran berlaku 7 hari kalender sejak tanggal penerbitan.</p>
      </div>

      <div class="snk-section">
        <h2>3. Pembayaran</h2>
        <ul>
          <li>DP 50% dari total nilai proyek wajib dibayar sebelum pengerjaan dimulai.</li>
          <li>Pelunasan 50% sisanya dibayar setelah Klien menyetujui hasil akhir, sebelum Go-Live.</li>
          <li>Metode: Transfer BCA, QRIS, GoPay, OVO, Dana.</li>
          <li>Konfirmasi transfer via WhatsApp ke nomor resmi Zephytor beserta bukti bayar.</li>
          <li>Invoice resmi diterbitkan dalam 1×24 jam setelah konfirmasi pembayaran masuk.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h2>4. Revisi &amp; Perubahan</h2>
        <ul>
          <li>Revisi tidak terbatas (unlimited) berlaku selama masa pengerjaan hingga sebelum Go-Live.</li>
          <li>Revisi disampaikan via WhatsApp atau email resmi — bukan lewat pihak ketiga.</li>
          <li>Perubahan total konsep setelah desain disetujui dapat dikenakan biaya tambahan yang disepakati bersama.</li>
          <li>Setelah Go-Live, revisi ditangani dalam Masa Garansi. Di luar garansi ada biaya kecil yang dikomunikasikan lebih dulu.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h2>5. Hak Kepemilikan &amp; Kekayaan Intelektual</h2>
        <ul>
          <li>Seluruh aset (desain, kode, konten) jadi hak milik penuh Klien setelah pelunasan 100% terpenuhi.</li>
          <li>Sebelum pelunasan, aset tetap milik Zephytor dan tidak boleh digunakan untuk keperluan apa pun.</li>
          <li>Zephytor berhak menampilkan hasil kerja sebagai portofolio kecuali ada NDA tertulis dari Klien sebelum proyek dimulai.</li>
          <li>Klien menjamin semua konten yang diserahkan bebas dari pelanggaran hak cipta pihak ketiga.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h2>6. Konten &amp; Materi Proyek</h2>
        <ul>
          <li>Klien bertanggung jawab menyediakan materi (teks, foto, logo, video) dalam format siap pakai.</li>
          <li>Keterlambatan pengiriman materi oleh Klien tidak memengaruhi tenggat pengerjaan Penyedia Jasa.</li>
          <li>Jika materi tidak dikirim sesuai tenggat, Zephytor dapat menggunakan placeholder atau stok konten bebas royalti atas sepengetahuan Klien.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h2>7. Masa Garansi</h2>
        <p>Garansi mencakup perbaikan bug teknis, error, atau masalah tampilan bukan akibat tindakan Klien sendiri:</p>
        <ul>
          <li><strong>Landing Page:</strong> Garansi 1 Bulan sejak Go-Live.</li>
          <li><strong>Paket Premium:</strong> Garansi 3 Bulan sejak Go-Live.</li>
          <li><strong>Enterprise:</strong> Garansi 12 Bulan sejak Go-Live.</li>
          <li>Garansi tidak berlaku untuk perubahan yang dilakukan sendiri oleh Klien atau pihak ketiga.</li>
          <li>Klaim garansi disampaikan via WhatsApp disertai deskripsi masalah dan tangkapan layar.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h2>8. Pembatalan Proyek</h2>
        <ul>
          <li>Batal sebelum pengerjaan dimulai: DP dikembalikan penuh dikurangi biaya administrasi 10%.</li>
          <li>Batal setelah pengerjaan dimulai: DP hangus sebagai kompensasi waktu dan resource yang sudah digunakan.</li>
          <li>Batal dari pihak Penyedia Jasa karena force majeure: DP dikembalikan penuh dalam 3–5 hari kerja.</li>
          <li>Semua pembatalan harus dikonfirmasi tertulis oleh kedua pihak via WhatsApp atau email.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h2>9. Integrasi Payment Gateway (Enterprise)</h2>
        <ul>
          <li>Hanya tersedia untuk Paket Enterprise. Klien wajib memiliki NIB/SIUP yang masih berlaku.</li>
          <li>Proses verifikasi dari penyedia payment gateway sepenuhnya di luar kendali Zephytor.</li>
          <li>Biaya transaksi (MDR) adalah tanggung jawab Klien sepenuhnya sesuai ketentuan penyedia.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h2>10. Kerahasiaan</h2>
        <ul>
          <li>Informasi bisnis Klien dijaga kerahasiaannya dan tidak dibagikan ke pihak ketiga tanpa persetujuan tertulis.</li>
          <li>Klien dapat meminta NDA terpisah sebelum proyek dimulai untuk perlindungan tambahan.</li>
          <li>Kewajiban kerahasiaan berlaku selama 3 tahun setelah kerja sama berakhir.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h2>11. Batasan Tanggung Jawab</h2>
        <ul>
          <li>Zephytor tidak bertanggung jawab atas kerugian bisnis atau kehilangan pendapatan Klien.</li>
          <li>Tanggung jawab maksimum Zephytor terbatas pada nilai total proyek yang telah dibayarkan.</li>
          <li>Zephytor tidak menjamin hasil bisnis tertentu (peningkatan penjualan, traffic, konversi) dari penggunaan website.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h2>12. Penyelesaian Sengketa</h2>
        <ul>
          <li>Sengketa diselesaikan melalui musyawarah mufakat dalam 14 hari kalender.</li>
          <li>Jika tidak tercapai kesepakatan, diselesaikan melalui mediasi atau arbitrase yang disepakati bersama.</li>
          <li>Perjanjian ini tunduk pada hukum Republik Indonesia.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h2>13. Ketentuan Penutup</h2>
        <p>Dengan memulai kerja sama, Klien menyatakan telah membaca, memahami, dan menyetujui seluruh isi dokumen ini. Zephytor berhak memperbarui dokumen ini sewaktu-waktu dengan pemberitahuan kepada Klien aktif.</p>
      </div>

      <div class="snk-contact">
        <strong>ZEPHYTOR</strong>
        zephytor.online &nbsp;·&nbsp; <a href="mailto:{{ config('company.email') }}">{{ config('company.email') }}</a> &nbsp;·&nbsp;
        <a href="https://wa.me/{{ config('company.phone_wa') }}">+62 858-9277-8882</a> (WhatsApp)
      </div>

    </div>
  </main>

  <script>
    const savedTheme = localStorage.getItem('theme') || 'dark';
    if (savedTheme !== 'dark') document.body.classList.remove('dark-theme');

    window.addEventListener('scroll', () => {
      const nav = document.querySelector('.navbar-top');
      if (nav) nav.classList.toggle('scrolled', window.scrollY > 50);
    });
  </script>
</body>
</html>
