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
          <div class="inv-party-name">{{ $invoice->user->name }}</div>
          <div class="inv-party-sub">{{ $invoice->user->email }}</div>
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

    <!-- Syarat & Ketentuan -->
    <div class="snk-doc">
      <div class="snk-header">
        <h2 class="snk-title">SYARAT &amp; KETENTUAN LAYANAN</h2>
        <p class="snk-subtitle">Zephytor — Website Premium untuk Bisnis Indonesia</p>
        <p class="snk-version">Versi 1.1 &nbsp;·&nbsp; Berlaku: Januari 2025 &nbsp;·&nbsp; Revisi: Maret 2025</p>
      </div>

      <p class="snk-intro">Dengan melakukan pembayaran DP atau menyatakan persetujuan, Klien dianggap telah membaca, memahami, dan menyetujui seluruh isi Syarat &amp; Ketentuan ini.</p>

      <div class="snk-section">
        <h3>1. Definisi</h3>
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
        <h3>2. Paket &amp; Harga Layanan</h3>
        <p>Zephytor menyediakan tiga paket resmi:</p>
        <table class="snk-table">
          <thead>
            <tr><th>Paket</th><th>Harga</th><th>Garansi &amp; Isi</th></tr>
          </thead>
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
        <h3>3. Pembayaran</h3>
        <ul>
          <li>DP 50% dari total nilai proyek wajib dibayar sebelum pengerjaan dimulai.</li>
          <li>Pelunasan 50% sisanya dibayar setelah Klien menyetujui hasil akhir, sebelum Go-Live.</li>
          <li>Metode: Transfer BCA, QRIS, GoPay, OVO, Dana.</li>
          <li>Konfirmasi transfer via WhatsApp ke nomor resmi Zephytor beserta bukti bayar.</li>
          <li>Invoice resmi diterbitkan dalam 1×24 jam setelah konfirmasi pembayaran masuk.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h3>4. Revisi &amp; Perubahan</h3>
        <ul>
          <li>Revisi tidak terbatas (unlimited) berlaku selama masa pengerjaan hingga sebelum Go-Live.</li>
          <li>Revisi disampaikan via WhatsApp atau email resmi — bukan lewat pihak ketiga.</li>
          <li>Perubahan total konsep setelah desain disetujui dapat dikenakan biaya tambahan yang disepakati bersama.</li>
          <li>Setelah Go-Live, revisi ditangani dalam Masa Garansi. Di luar garansi ada biaya kecil yang dikomunikasikan lebih dulu.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h3>5. Hak Kepemilikan &amp; Kekayaan Intelektual</h3>
        <ul>
          <li>Seluruh aset (desain, kode, konten) jadi hak milik penuh Klien setelah pelunasan 100% terpenuhi.</li>
          <li>Sebelum pelunasan, aset tetap milik Zephytor dan tidak boleh digunakan untuk keperluan apa pun.</li>
          <li>Zephytor berhak menampilkan hasil kerja sebagai portofolio kecuali ada NDA tertulis dari Klien sebelum proyek dimulai.</li>
          <li>Klien menjamin semua konten yang diserahkan bebas dari pelanggaran hak cipta pihak ketiga.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h3>6. Konten &amp; Materi Proyek</h3>
        <ul>
          <li>Klien bertanggung jawab menyediakan materi (teks, foto, logo, video) dalam format siap pakai.</li>
          <li>Keterlambatan pengiriman materi oleh Klien tidak memengaruhi tenggat pengerjaan Penyedia Jasa.</li>
          <li>Jika materi tidak dikirim sesuai tenggat, Zephytor dapat menggunakan placeholder atau stok konten bebas royalti atas sepengetahuan Klien.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h3>7. Masa Garansi</h3>
        <p>Garansi mencakup perbaikan bug teknis, error, atau masalah tampilan bukan akibat tindakan Klien sendiri:</p>
        <ul>
          <li><strong>Landing Page:</strong> Garansi 1 Bulan sejak Go-Live.</li>
          <li><strong>Paket Premium:</strong> Garansi 3 Bulan sejak Go-Live.</li>
          <li><strong>Enterprise:</strong> Garansi 12 Bulan sejak Go-Live.</li>
          <li>Garansi tidak berlaku untuk perubahan yang dilakukan sendiri oleh Klien atau pihak ketiga yang ditunjuk Klien.</li>
          <li>Klaim garansi disampaikan via WhatsApp disertai deskripsi masalah dan tangkapan layar.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h3>8. Pembatalan Proyek</h3>
        <ul>
          <li>Batal sebelum pengerjaan dimulai: DP dikembalikan penuh dikurangi biaya administrasi 10%.</li>
          <li>Batal setelah pengerjaan dimulai: DP hangus sebagai kompensasi waktu dan resource yang sudah digunakan.</li>
          <li>Batal dari pihak Penyedia Jasa karena force majeure: DP dikembalikan penuh dalam 3–5 hari kerja.</li>
          <li>Semua pembatalan harus dikonfirmasi tertulis oleh kedua pihak via WhatsApp atau email.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h3>9. Integrasi Payment Gateway (Enterprise)</h3>
        <ul>
          <li>Hanya tersedia untuk Paket Enterprise. Klien wajib memiliki NIB/SIUP yang masih berlaku.</li>
          <li>Proses verifikasi dari penyedia payment gateway sepenuhnya di luar kendali Zephytor.</li>
          <li>Biaya transaksi (MDR) adalah tanggung jawab Klien sepenuhnya sesuai ketentuan penyedia.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h3>10. Kerahasiaan</h3>
        <ul>
          <li>Informasi bisnis Klien dijaga kerahasiaannya dan tidak dibagikan ke pihak ketiga tanpa persetujuan tertulis.</li>
          <li>Klien dapat meminta NDA terpisah sebelum proyek dimulai untuk perlindungan tambahan.</li>
          <li>Kewajiban kerahasiaan berlaku selama 3 tahun setelah kerja sama berakhir.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h3>11. Batasan Tanggung Jawab</h3>
        <ul>
          <li>Zephytor tidak bertanggung jawab atas kerugian bisnis atau kehilangan pendapatan Klien.</li>
          <li>Tanggung jawab maksimum Zephytor terbatas pada nilai total proyek yang telah dibayarkan.</li>
          <li>Zephytor tidak menjamin hasil bisnis tertentu (peningkatan penjualan, traffic, konversi) dari penggunaan website.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h3>12. Penyelesaian Sengketa</h3>
        <ul>
          <li>Sengketa diselesaikan melalui musyawarah mufakat dalam 14 hari kalender.</li>
          <li>Jika tidak tercapai kesepakatan, diselesaikan melalui mediasi atau arbitrase yang disepakati bersama.</li>
          <li>Perjanjian ini tunduk pada hukum Republik Indonesia.</li>
        </ul>
      </div>

      <div class="snk-section">
        <h3>13. Ketentuan Penutup</h3>
        <p>Dengan memulai kerja sama, Klien menyatakan telah membaca, memahami, dan menyetujui seluruh isi dokumen ini. Zephytor berhak memperbarui dokumen ini sewaktu-waktu dengan pemberitahuan kepada Klien aktif.</p>
      </div>

      <div class="snk-footer">
        <strong>ZEPHYTOR</strong><br>
        zephytor.online &nbsp;·&nbsp; zephytor@gmail.com &nbsp;·&nbsp; +62 858-9277-8882 (WhatsApp)
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

/* Syarat & Ketentuan styles */
.snk-doc {
  background: #fff;
  border: 1px solid var(--border, #e5e7eb);
  border-radius: 16px;
  padding: 48px;
  margin-top: 24px;
  font-size: 0.875rem;
  line-height: 1.7;
  color: #374151;
}
.snk-header {
  text-align: center;
  margin-bottom: 28px;
  padding-bottom: 24px;
  border-bottom: 2px solid #111;
}
.snk-title {
  font-size: 1.1rem;
  font-weight: 800;
  letter-spacing: 1px;
  margin: 0 0 6px;
  color: #111;
}
.snk-subtitle {
  font-size: 0.9rem;
  font-weight: 600;
  margin: 0 0 4px;
  color: #333;
}
.snk-version {
  font-size: 0.8rem;
  color: #777;
  margin: 0;
}
.snk-intro {
  font-style: italic;
  background: #f9fafb;
  border-left: 3px solid #111;
  padding: 12px 16px;
  border-radius: 0 8px 8px 0;
  margin-bottom: 24px;
}
.snk-section {
  margin-bottom: 20px;
}
.snk-section h3 {
  font-size: 0.875rem;
  font-weight: 700;
  color: #111;
  margin: 0 0 8px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}
.snk-section ul {
  margin: 0;
  padding-left: 20px;
}
.snk-section ul li {
  margin-bottom: 4px;
}
.snk-section p {
  margin: 0 0 8px;
}
.snk-table {
  width: 100%;
  border-collapse: collapse;
  margin: 12px 0;
  font-size: 0.8rem;
}
.snk-table th {
  background: #111;
  color: #fff;
  padding: 8px 12px;
  text-align: left;
  font-weight: 600;
}
.snk-table td {
  padding: 8px 12px;
  border-bottom: 1px solid #e5e7eb;
  vertical-align: top;
}
.snk-table tr:nth-child(even) td {
  background: #f9fafb;
}
.snk-footer {
  margin-top: 28px;
  padding-top: 20px;
  border-top: 1px solid #e5e7eb;
  text-align: center;
  font-size: 0.8rem;
  color: #555;
}
</style>
@endpush
