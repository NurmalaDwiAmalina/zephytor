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

  @if(session('success'))
  <div class="alert-success" style="background:#d1fae5;border:1px solid #6ee7b7;color:#065f46;padding:14px 20px;border-radius:12px;margin-bottom:20px;font-weight:600;">
    {{ session('success') }}
  </div>
  @endif

  @if(session('error'))
  <div style="background:#fee2e2;border:1px solid #fca5a5;color:#991b1b;padding:14px 20px;border-radius:12px;margin-bottom:20px;font-weight:600;">
    {{ session('error') }}
  </div>
  @endif

  <!-- Cara Pembayaran QRIS -->
  @if($invoice->status !== 'paid' && $invoice->status !== 'cancelled')
  <div class="dash-panel" style="margin-bottom:24px;border:2px solid var(--text-h);">
    <div style="font-size:1.1rem;font-weight:800;color:var(--text-h);margin-bottom:4px;">Cara Pembayaran</div>
    <div style="font-size:0.875rem;color:var(--text-muted);margin-bottom:12px;">Pilih metode pembayaran yang paling mudah untuk kamu:</div>
    <div style="display:flex;flex-wrap:wrap;gap:8px;margin-bottom:20px;">
      <span style="background:#f0fdf4;color:#15803d;border:1px solid #bbf7d0;padding:4px 12px;border-radius:20px;font-size:0.8rem;font-weight:600;">QRIS</span>
      <span style="background:#eff6ff;color:#1d4ed8;border:1px solid #bfdbfe;padding:4px 12px;border-radius:20px;font-size:0.8rem;font-weight:600;">GoPay</span>
      <span style="background:#fdf4ff;color:#7e22ce;border:1px solid #e9d5ff;padding:4px 12px;border-radius:20px;font-size:0.8rem;font-weight:600;">OVO</span>
      <span style="background:#fff7ed;color:#c2410c;border:1px solid #fed7aa;padding:4px 12px;border-radius:20px;font-size:0.8rem;font-weight:600;">Dana</span>
      <span style="background:#fefce8;color:#a16207;border:1px solid #fde68a;padding:4px 12px;border-radius:20px;font-size:0.8rem;font-weight:600;">ShopeePay</span>
      <span style="background:#f0f9ff;color:#0369a1;border:1px solid #bae6fd;padding:4px 12px;border-radius:20px;font-size:0.8rem;font-weight:600;">m-Banking</span>
      <span style="background:#fdf2f8;color:#9d174d;border:1px solid #fbcfe8;padding:4px 12px;border-radius:20px;font-size:0.8rem;font-weight:600;">Kartu Kredit/Debit</span>
    </div>
    <div style="display:flex;align-items:center;gap:32px;flex-wrap:wrap;">
      <div style="text-align:center;">
        <img src="{{ asset('images/qris.jpeg') }}" alt="QRIS Zephytor" style="width:200px;height:200px;object-fit:contain;border-radius:12px;border:1px solid var(--border);">
      </div>
      <div style="flex:1;min-width:200px;">
        <div style="font-weight:700;font-size:1rem;margin-bottom:4px;">ZEPHYTOR, DIGITAL &amp; KREATIF</div>
        <div style="font-size:0.9rem;color:var(--text-muted);margin-bottom:16px;">085892778882</div>
        <div style="font-size:1.5rem;font-weight:800;color:var(--text-h);margin-bottom:8px;">{{ $invoice->formatted_amount }}</div>
        <div style="font-size:0.8rem;color:var(--text-muted);background:rgba(0,0,0,0.03);padding:10px 14px;border-radius:8px;line-height:1.6;">
          1. Buka aplikasi pembayaran<br>
          2. Pilih <strong>Scan QR / QRIS</strong><br>
          3. Scan kode di samping<br>
          4. Masukkan nominal <strong>{{ $invoice->formatted_amount }}</strong><br>
          5. Upload bukti bayar di bawah
        </div>
      </div>
    </div>
  </div>
  @endif

  <!-- Upload Bukti Bayar -->
  @if($invoice->status !== 'paid' && $invoice->status !== 'cancelled')
  <div class="dash-panel" style="margin-bottom:24px;">
    <div class="panel-title" style="margin-bottom:16px;">
      Bukti Pembayaran
      @if($invoice->payment_proof)
        <span style="margin-left:10px;font-size:0.75rem;background:#d1fae5;color:#065f46;padding:2px 10px;border-radius:20px;font-weight:600;">Sudah Diupload</span>
      @endif
    </div>

    @if($invoice->payment_proof)
    <div style="display:flex;align-items:center;gap:12px;margin-bottom:16px;padding:12px 16px;background:rgba(0,0,0,0.02);border-radius:10px;border:1px solid var(--border);">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
      <div style="flex:1;">
        <div style="font-weight:600;font-size:0.875rem;">Bukti dikirim {{ $invoice->proof_uploaded_at?->diffForHumans() }}</div>
        <div style="font-size:0.8rem;color:var(--text-muted);">Menunggu verifikasi admin</div>
      </div>
      <a href="/dashboard/invoices/{{ $invoice->id }}/proof" target="_blank" class="btn btn-sm btn-outline">Lihat →</a>
    </div>
    @endif

    <form action="/dashboard/invoices/{{ $invoice->id }}/upload-proof" method="POST" enctype="multipart/form-data">
      @csrf
      <div style="border:2px dashed var(--border);border-radius:12px;padding:24px;text-align:center;cursor:pointer;transition:border-color 0.2s;" id="dropzone" onclick="document.getElementById('proofFile').click()">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="margin:0 auto 8px;display:block;opacity:0.4"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
        <div style="font-weight:600;margin-bottom:4px;" id="dropzone-label">Klik untuk pilih file bukti bayar</div>
        <div style="font-size:0.8rem;color:var(--text-muted);">JPG, PNG, atau PDF · Maks. 5MB</div>
        <input type="file" id="proofFile" name="proof" accept=".jpg,.jpeg,.png,.pdf" style="display:none" onchange="updateDropzone(this)">
      </div>
      @error('proof')<div style="color:#ef4444;font-size:0.85rem;margin-top:8px;">{{ $message }}</div>@enderror
      <button type="submit" class="btn btn-primary btn-full" style="margin-top:12px;" id="uploadBtn" disabled>Upload Bukti Bayar</button>
    </form>
  </div>
  @endif

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

    <!-- S&K — hanya muncul saat download PDF -->
    <div class="snk-pdf">
      <div class="snk-pdf-header">
        <div class="snk-pdf-title">SYARAT &amp; KETENTUAN LAYANAN</div>
        <div class="snk-pdf-sub">Zephytor — Website Premium untuk Bisnis Indonesia</div>
        <div class="snk-pdf-ver">Versi 1.1 &nbsp;·&nbsp; Berlaku: Januari 2025 &nbsp;·&nbsp; Revisi: Maret 2025</div>
      </div>
      <p class="snk-pdf-lead">Dengan melakukan pembayaran DP atau menyatakan persetujuan, Klien dianggap telah membaca, memahami, dan menyetujui seluruh isi Syarat &amp; Ketentuan ini.</p>
      <div class="snk-pdf-cols">
        <div>
          <div class="snk-pdf-section"><div class="snk-pdf-h">1. Definisi</div><ul><li><b>"Penyedia Jasa"</b> = Zephytor beserta seluruh tim dan afiliasinya.</li><li><b>"Klien"</b> = individu, UMKM, atau entitas yang menggunakan layanan Zephytor.</li><li><b>"Proyek"</b> = keseluruhan pekerjaan yang disepakati dalam satu sesi kerja sama.</li><li><b>"Revisi"</b> = perubahan desain atau konten yang diminta Klien selama masa pengerjaan.</li><li><b>"Go-Live"</b> = tanggal website resmi dipublikasikan ke publik.</li><li><b>"Masa Garansi"</b> = periode purna jual sesuai paket, dihitung sejak tanggal Go-Live.</li></ul></div>
          <div class="snk-pdf-section"><div class="snk-pdf-h">3. Pembayaran</div><ul><li>DP 50% wajib dibayar sebelum pengerjaan dimulai.</li><li>Pelunasan 50% dibayar setelah Klien menyetujui hasil akhir, sebelum Go-Live.</li><li>Metode: Transfer BCA, QRIS, GoPay, OVO, Dana.</li><li>Konfirmasi transfer via WhatsApp beserta bukti bayar.</li><li>Invoice resmi diterbitkan dalam 1×24 jam setelah konfirmasi pembayaran masuk.</li></ul></div>
          <div class="snk-pdf-section"><div class="snk-pdf-h">4. Revisi &amp; Perubahan</div><ul><li>Revisi unlimited berlaku selama masa pengerjaan hingga sebelum Go-Live.</li><li>Revisi disampaikan via WhatsApp atau email resmi.</li><li>Perubahan total konsep setelah desain disetujui dapat dikenakan biaya tambahan.</li><li>Setelah Go-Live, revisi ditangani dalam Masa Garansi.</li></ul></div>
          <div class="snk-pdf-section"><div class="snk-pdf-h">5. Hak Kepemilikan &amp; HAKI</div><ul><li>Seluruh aset jadi hak milik penuh Klien setelah pelunasan 100%.</li><li>Sebelum pelunasan, aset tetap milik Zephytor.</li><li>Zephytor berhak menampilkan hasil kerja sebagai portofolio kecuali ada NDA tertulis.</li><li>Klien menjamin konten bebas dari pelanggaran hak cipta pihak ketiga.</li></ul></div>
          <div class="snk-pdf-section"><div class="snk-pdf-h">6. Konten &amp; Materi</div><ul><li>Klien menyediakan materi (teks, foto, logo, video) dalam format siap pakai.</li><li>Keterlambatan materi dari Klien tidak memengaruhi tenggat Penyedia Jasa.</li><li>Jika materi tidak dikirim, Zephytor dapat pakai placeholder bebas royalti.</li></ul></div>
          <div class="snk-pdf-section"><div class="snk-pdf-h">10. Kerahasiaan</div><ul><li>Informasi bisnis Klien tidak dibagikan ke pihak ketiga tanpa persetujuan tertulis.</li><li>Klien dapat meminta NDA terpisah sebelum proyek dimulai.</li><li>Kewajiban kerahasiaan berlaku selama 3 tahun setelah kerja sama berakhir.</li></ul></div>
        </div>
        <div>
          <div class="snk-pdf-section"><div class="snk-pdf-h">2. Paket &amp; Harga</div><table class="snk-pdf-table"><thead><tr><th>Paket</th><th>Harga</th><th>Garansi</th></tr></thead><tbody><tr><td><b>Landing Page</b></td><td>Rp 300.000</td><td>1 Bulan</td></tr><tr><td><b>Premium</b></td><td>Rp 3.500.000</td><td>3 Bulan</td></tr><tr><td><b>Enterprise</b></td><td>Custom</td><td>12 Bulan</td></tr></tbody></table><p style="font-size:0.75rem;margin-top:6px;">Harga berlaku 7 hari kalender sejak tanggal penerbitan.</p></div>
          <div class="snk-pdf-section"><div class="snk-pdf-h">7. Masa Garansi</div><ul><li>Garansi mencakup perbaikan bug teknis dan masalah tampilan bukan akibat tindakan Klien.</li><li>Tidak berlaku untuk perubahan yang dilakukan sendiri oleh Klien atau pihak ketiga.</li><li>Klaim via WhatsApp disertai deskripsi masalah dan tangkapan layar.</li></ul></div>
          <div class="snk-pdf-section"><div class="snk-pdf-h">8. Pembatalan Proyek</div><ul><li>Batal sebelum pengerjaan: DP dikembalikan dikurangi biaya administrasi 10%.</li><li>Batal setelah pengerjaan dimulai: DP hangus.</li><li>Batal dari Penyedia Jasa karena force majeure: DP dikembalikan penuh dalam 3–5 hari kerja.</li><li>Semua pembatalan harus dikonfirmasi tertulis via WhatsApp atau email.</li></ul></div>
          <div class="snk-pdf-section"><div class="snk-pdf-h">9. Payment Gateway (Enterprise)</div><ul><li>Hanya untuk Paket Enterprise. Klien wajib memiliki NIB/SIUP yang masih berlaku.</li><li>Proses verifikasi sepenuhnya di luar kendali Zephytor.</li><li>Biaya transaksi (MDR) adalah tanggung jawab Klien.</li></ul></div>
          <div class="snk-pdf-section"><div class="snk-pdf-h">11. Batasan Tanggung Jawab</div><ul><li>Zephytor tidak bertanggung jawab atas kerugian bisnis atau kehilangan pendapatan Klien.</li><li>Tanggung jawab maksimum terbatas pada nilai total proyek yang telah dibayarkan.</li><li>Zephytor tidak menjamin hasil bisnis tertentu dari penggunaan website.</li></ul></div>
          <div class="snk-pdf-section"><div class="snk-pdf-h">12. Penyelesaian Sengketa</div><ul><li>Sengketa diselesaikan melalui musyawarah mufakat dalam 14 hari kalender.</li><li>Jika tidak tercapai kesepakatan, melalui mediasi atau arbitrase yang disepakati bersama.</li><li>Perjanjian ini tunduk pada hukum Republik Indonesia.</li></ul></div>
        </div>
      </div>
      <div class="snk-pdf-footer">
        <b>13. Ketentuan Penutup:</b> Dengan memulai kerja sama, Klien menyatakan telah membaca, memahami, dan menyetujui seluruh isi dokumen ini.<br>
        <b>ZEPHYTOR</b> &nbsp;·&nbsp; zephytor.online &nbsp;·&nbsp; zephytor@gmail.com &nbsp;·&nbsp; +62 858-9277-8882 (WhatsApp)
      </div>
    </div>

  </div><!-- #invoice-printable -->

</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
function updateDropzone(input) {
  const btn = document.getElementById('uploadBtn');
  const label = document.getElementById('dropzone-label');
  if (input.files && input.files[0]) {
    label.textContent = input.files[0].name;
    btn.disabled = false;
  }
}

function downloadPDF() {
  const btn = document.getElementById('downloadBtn');
  btn.disabled = true;
  btn.innerHTML = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="animation:spin 1s linear infinite"><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" opacity=".3"/><path d="M21 12a9 9 0 00-9-9"/></svg> Menyiapkan...';

  document.querySelector('.snk-pdf').style.display = 'block';

  const element = document.getElementById('invoice-printable');
  const opt = {
    margin: [8, 8, 8, 8],
    filename: '{{ $invoice->invoice_number }}.pdf',
    image: { type: 'jpeg', quality: 0.98 },
    html2canvas: { scale: 2, useCORS: true },
    jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' },
    pagebreak: { mode: ['css', 'legacy'] }
  };

  html2pdf().set(opt).from(element).save().then(() => {
    document.querySelector('.snk-pdf').style.display = 'none';
    btn.disabled = false;
    btn.innerHTML = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg> Download PDF';
  });
}
</script>
<style>
@keyframes spin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
.snk-pdf { display: none; background: #fff; color: #111; padding: 24px; font-size: 0.72rem; line-height: 1.55; page-break-before: always; }
.snk-pdf-header { text-align: center; padding-bottom: 12px; border-bottom: 1.5px solid #111; margin-bottom: 12px; }
.snk-pdf-title { font-size: 0.85rem; font-weight: 800; letter-spacing: 1px; }
.snk-pdf-sub { font-size: 0.75rem; font-weight: 600; margin-top: 2px; }
.snk-pdf-ver { font-size: 0.7rem; color: #666; margin-top: 2px; }
.snk-pdf-lead { font-style: italic; border-left: 2px solid #111; padding: 6px 10px; margin-bottom: 12px; background: #f9f9f9; font-size: 0.72rem; }
.snk-pdf-cols { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.snk-pdf-section { margin-bottom: 10px; }
.snk-pdf-h { font-weight: 700; text-transform: uppercase; font-size: 0.68rem; letter-spacing: 0.5px; margin-bottom: 4px; color: #111; }
.snk-pdf ul { margin: 0; padding-left: 14px; }
.snk-pdf ul li { margin-bottom: 2px; }
.snk-pdf-table { width: 100%; border-collapse: collapse; font-size: 0.68rem; margin: 4px 0; }
.snk-pdf-table th { background: #111; color: #fff; padding: 4px 8px; text-align: left; }
.snk-pdf-table td { padding: 4px 8px; border-bottom: 1px solid #ddd; }
.snk-pdf-footer { margin-top: 12px; padding-top: 10px; border-top: 1px solid #ddd; font-size: 0.7rem; color: #444; text-align: center; }
</style>
@endpush
