@extends('layouts.admin')
@section('title', $invoice->invoice_number)
@section('page-title', 'Detail Invoice')

@section('content')
<div class="dash-page">

  <div class="page-header">
    <div>
      <a href="/admin/invoices" class="back-link">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
        Kembali
      </a>
      <h2 class="page-h">{{ $invoice->invoice_number }}</h2>
    </div>
    <div style="display:flex;gap:10px;align-items:center;">
      <span class="status-badge lg" style="--color: {{ $invoice->status_color }}">{{ $invoice->status_label }}</span>
      <button onclick="downloadPDF()" id="downloadBtn" class="btn btn-primary btn-sm" style="display:flex;align-items:center;gap:8px;">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
        Download PDF
      </button>
    </div>
  </div>

  <div class="invoice-admin-grid">

    <!-- Invoice Document (yang akan di-print) -->
    <div>
      <div id="invoice-printable">

        <!-- Invoice -->
        <div class="invoice-doc">
          <div class="inv-header">
            <div class="inv-brand">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><polygon points="16,2 30,28 2,28" fill="currentColor"/></svg>
              <span>Zephytor</span>
            </div>
            <div class="inv-meta">
              <div class="inv-meta-row"><span>No. Invoice</span><strong>{{ $invoice->invoice_number }}</strong></div>
              <div class="inv-meta-row"><span>No. Order</span><span class="code-text">{{ $invoice->order->order_number }}</span></div>
              <div class="inv-meta-row"><span>Dibuat</span><span>{{ $invoice->created_at->format('d M Y') }}</span></div>
              @if($invoice->due_date)
              <div class="inv-meta-row"><span>Jatuh Tempo</span><span>{{ $invoice->due_date->format('d M Y') }}</span></div>
              @endif
            </div>
          </div>

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

          <table class="inv-table">
            <thead>
              <tr><th>Deskripsi</th><th style="text-align:right">Jumlah</th></tr>
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
            <div class="inv-notes"><strong>Catatan:</strong> {{ $invoice->notes }}</div>
          @endif

          @if($invoice->paid_at)
          <div class="inv-paid-stamp">
            <div class="paid-stamp">✓ LUNAS</div>
            <div class="paid-date">Dibayar pada {{ $invoice->paid_at->format('d M Y, H:i') }}</div>
          </div>
          @endif

          <div class="inv-footer">Terima kasih telah mempercayai Zephytor. 🚀</div>
        </div>

        <!-- S&K — hanya muncul di PDF -->
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

    <!-- Admin actions -->
    <div>
      <div class="dash-panel">
        <div class="panel-title" style="margin-bottom:16px">Update Status</div>
        <form action="/admin/invoices/{{ $invoice->id }}/status" method="POST">
          @csrf @method('PUT')
          <div class="form-group">
            <label class="form-label">Status Invoice</label>
            <select name="status" class="form-control">
              <option value="unpaid" {{ $invoice->status == 'unpaid' ? 'selected' : '' }}>Belum Dibayar</option>
              <option value="paid" {{ $invoice->status == 'paid' ? 'selected' : '' }}>Lunas</option>
              <option value="overdue" {{ $invoice->status == 'overdue' ? 'selected' : '' }}>Jatuh Tempo</option>
              <option value="cancelled" {{ $invoice->status == 'cancelled' ? 'selected' : '' }}>Dibatalkan</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary btn-full">Update Status</button>
        </form>
      </div>

      @if($invoice->payment_proof)
      <div class="dash-panel" style="margin-top:16px">
        <div class="panel-header">
          <div class="panel-title">Bukti Pembayaran</div>
          <span style="font-size:0.75rem;background:#fef3c7;color:#92400e;padding:2px 10px;border-radius:20px;font-weight:600;">Perlu Verifikasi</span>
        </div>
        <div style="margin-top:12px;padding:12px 16px;background:rgba(0,0,0,0.02);border-radius:10px;border:1px solid var(--border);">
          <div style="font-size:0.85rem;color:var(--text-muted);margin-bottom:8px;">Diupload {{ $invoice->proof_uploaded_at?->diffForHumans() }}</div>
          <a href="/admin/invoices/{{ $invoice->id }}/proof" target="_blank" class="btn btn-outline btn-sm btn-full">Lihat Bukti Bayar →</a>
        </div>
        @if($invoice->status === 'unpaid')
        <form action="/admin/invoices/{{ $invoice->id }}/status" method="POST" style="margin-top:10px;">
          @csrf @method('PUT')
          <input type="hidden" name="status" value="paid">
          <button type="submit" class="btn btn-primary btn-full" onclick="return confirm('Tandai invoice ini sebagai LUNAS?')">✓ Verifikasi & Tandai Lunas</button>
        </form>
        @endif
      </div>
      @endif

      <div class="dash-panel" style="margin-top:16px">
        <div class="panel-title" style="margin-bottom:12px">Info Pesanan</div>
        <div class="detail-row"><span>No. Order</span><span class="code-text">{{ $invoice->order->order_number }}</span></div>
        <div class="detail-row"><span>Status Order</span><span class="status-badge" style="--color: {{ $invoice->order->status_color }}">{{ $invoice->order->status_label }}</span></div>
        <div style="margin-top:12px;">
          <a href="/admin/orders/{{ $invoice->order->id }}" class="btn btn-outline btn-full">Lihat Detail Order →</a>
        </div>
      </div>
    </div>

  </div>

</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
function downloadPDF() {
  const btn = document.getElementById('downloadBtn');
  btn.disabled = true;
  btn.innerHTML = '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="animation:spin 1s linear infinite"><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" opacity=".3"/><path d="M21 12a9 9 0 00-9-9"/></svg> Menyiapkan...';

  // Tampilkan S&K sebelum di-print
  document.querySelector('.snk-pdf').style.display = 'block';

  const element = document.getElementById('invoice-printable');
  html2pdf().set({
    margin: [8, 8, 8, 8],
    filename: '{{ $invoice->invoice_number }}.pdf',
    image: { type: 'jpeg', quality: 0.98 },
    html2canvas: { scale: 2, useCORS: true },
    jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' },
    pagebreak: { mode: ['css', 'legacy'] },
  }).from(element).save().then(() => {
    // Sembunyikan lagi setelah download
    document.querySelector('.snk-pdf').style.display = 'none';
    btn.disabled = false;
    btn.innerHTML = '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg> Download PDF';
  });
}
</script>
<style>
@keyframes spin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }

/* S&K hanya muncul saat di-print ke PDF */
.snk-pdf { display: none; background: #fff; color: #111; padding: 24px; margin-top: 0; font-size: 0.72rem; line-height: 1.55; page-break-before: always; }
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
