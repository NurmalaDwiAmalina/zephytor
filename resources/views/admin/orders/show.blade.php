@extends('layouts.admin')
@section('title', 'Detail Pesanan')
@section('page-title', 'Detail Pesanan')

@section('content')
<div class="dash-page">

  <div class="page-header">
    <div>
      <a href="/admin/orders" class="back-link">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
        Kembali
      </a>
      <h2 class="page-h">{{ $order->order_number }}</h2>
    </div>
    <span class="status-badge lg" style="--color: {{ $order->status_color }}">{{ $order->status_label }}</span>
  </div>

  <div class="order-detail-grid">

    <!-- Left: Order info -->
    <div>
      <!-- User info -->
      <div class="dash-panel">
        <div class="panel-header">
          <div class="panel-title">Informasi Klien</div>
          @if(!$order->user_id)
            <span style="font-size:0.75rem;background:#f59e0b22;color:#b45309;padding:2px 10px;border-radius:20px;font-weight:600;">Belum punya akun</span>
          @endif
        </div>
        <div style="margin-top:16px;">
          <div class="detail-row">
            <span>Nama</span>
            <strong>{{ $order->customer_name ?? $order->user->name }}</strong>
          </div>
          @if($order->phone)
          <div class="detail-row">
            <span>WhatsApp</span>
            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', preg_replace('/^0/', '62', $order->phone)) }}?text=Halo%20{{ urlencode($order->customer_name ?? $order->user->name) }},%20saya%20dari%20tim%20Zephytor%20ingin%20menindaklanjuti%20pesanan%20{{ $order->order_number }}." target="_blank" style="color:#25d366;font-weight:700;">
              {{ $order->phone }} →
            </a>
          </div>
          @endif
          @if($order->user_id)
          <div class="detail-row">
            <span>Email</span>
            <span>{{ $order->user->email }}</span>
          </div>
          @endif
          <div class="detail-row">
            <span>Tanggal Order</span>
            <span>{{ $order->created_at->format('d M Y, H:i') }}</span>
          </div>
        </div>

        @if(!$order->user_id)
        <div style="margin-top:16px;padding-top:16px;border-top:1px solid var(--border);">
          <div style="font-size:0.8rem;font-weight:600;color:var(--text-muted);margin-bottom:10px;text-transform:uppercase;letter-spacing:0.5px;">Link ke Akun</div>
          <form action="/admin/orders/{{ $order->id }}/link-user" method="POST" style="display:flex;gap:8px;">
            @csrf
            <select name="user_id" class="form-control" style="flex:1;font-size:0.875rem;" required>
              <option value="">— Pilih akun klien —</option>
              @foreach(\App\Models\User::where('role','user')->orderBy('name')->get() as $u)
                <option value="{{ $u->id }}">{{ $u->name }} ({{ $u->email }})</option>
              @endforeach
            </select>
            <button type="submit" class="btn btn-sm btn-outline">Link</button>
          </form>
        </div>
        @endif
      </div>

      <!-- Package info -->
      <div class="dash-panel" style="margin-top:16px">
        <div class="panel-title" style="margin-bottom:16px">Paket</div>
        <div class="detail-row">
          <span>Nama Paket</span>
          <strong>{{ $order->package->name }}</strong>
        </div>
        <div class="detail-row">
          <span>Harga Paket</span>
          <span>{{ $order->package->price_display }}</span>
        </div>
        <div class="detail-row">
          <span>Harga Deal</span>
          <strong>{{ $order->total_price ? 'Rp '.number_format($order->total_price,0,',','.') : 'Belum ditetapkan' }}</strong>
        </div>
        @if($order->notes)
        <div style="margin-top:12px;">
          <span class="detail-label">Catatan Klien</span>
          <div class="notes-box">{{ $order->notes }}</div>
        </div>
        @endif
      </div>

      <!-- Update status -->
      <div class="dash-panel" style="margin-top:16px">
        <div class="panel-title" style="margin-bottom:16px">Update Status</div>
        <form action="/admin/orders/{{ $order->id }}" method="POST">
          @csrf @method('PUT')
          <div class="form-group">
            <label class="form-label">Status</label>
            <select name="status" class="form-control">
              @foreach(['pending'=>'Pending', 'in_progress'=>'Sedang Dikerjakan', 'completed'=>'Selesai', 'cancelled'=>'Dibatalkan'] as $val => $label)
                <option value="{{ $val }}" {{ $order->status == $val ? 'selected' : '' }}>{{ $label }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label class="form-label">Harga Final</label>
            <input type="number" name="total_price" class="form-control" value="{{ $order->total_price }}" placeholder="Nominal dalam rupiah">
          </div>
          <div class="form-group">
            <label class="form-label">Catatan Internal</label>
            <textarea name="notes" class="form-control" rows="3" placeholder="Catatan tim...">{{ $order->notes }}</textarea>
          </div>
          <div style="display:flex;gap:10px;">
            <button type="submit" class="btn btn-primary">Simpan Update</button>
            <a href="/admin/invoices/create?order_id={{ $order->id }}" class="btn btn-outline">+ Buat Invoice</a>
          </div>
        </form>
      </div>
    </div>

    <!-- Right: SOW & Agreement -->
    <div>
      <!-- Scope of Work -->
      <div class="dash-panel">
        <div class="panel-header">
          <div class="panel-title">Scope of Work</div>
          <button class="btn btn-sm btn-outline" id="genSowBtn" onclick="generateSOW({{ $order->id }})">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
            Generate Otomatis
          </button>
        </div>

        <div id="sowContent" style="margin-top:16px;">
          @if($order->scope_of_work)
            @php $sow = $order->scope_of_work; @endphp
            <div class="sow-section">
              <div class="sow-label">Deskripsi Proyek</div>
              <p>{{ $sow['description'] ?? '-' }}</p>
            </div>
            @if(!empty($sow['deliverables']))
            <div class="sow-section">
              <div class="sow-label">Deliverables</div>
              <ul class="sow-list">
                @foreach($sow['deliverables'] as $d)
                  <li>{{ $d }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <div class="sow-section">
              <div class="sow-label">Timeline</div>
              <p>{{ $sow['timeline'] ?? '-' }}</p>
            </div>
            @if(!empty($sow['exclusions']))
            <div class="sow-section">
              <div class="sow-label">Tidak Termasuk (Exclusions)</div>
              <ul class="sow-list">
                @foreach($sow['exclusions'] as $e)
                  <li>{{ $e }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <div class="sow-section">
              <div class="sow-label">Kebijakan Revisi</div>
              <p>{{ $sow['revision_policy'] ?? '-' }}</p>
            </div>
          @else
            <div class="empty-state">
              <p>Belum ada scope of work. Klik "Generate Otomatis" untuk membuat secara AI.</p>
            </div>
          @endif
        </div>
      </div>

      <!-- Agreement -->
      <div class="dash-panel" style="margin-top:16px">
        <div class="panel-title" style="margin-bottom:16px">Kesepakatan Pembelian</div>
        @if($order->agreed_at)
          <div class="agreement-done">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Disepakati pada {{ $order->agreed_at->format('d M Y, H:i') }}
          </div>
          @if($order->agreement_data)
            <div class="notes-box" style="margin-top:12px;white-space:pre-line;">{{ $order->agreement_data['text'] }}</div>
          @endif
        @else
          <form action="/admin/orders/{{ $order->id }}/agreement" method="POST">
            @csrf
            <div class="form-group">
              <label class="form-label">Teks Kesepakatan</label>
              <textarea name="agreement_text" class="form-control" rows="8" placeholder="Tuliskan poin-poin kesepakatan dengan klien...">{{ old('agreement_text', "Dengan ini disepakati bahwa:\n\n1. Pihak Zephytor akan mengerjakan {$order->package->name} sesuai spesifikasi paket.\n2. Total biaya yang disepakati: " . ($order->total_price ? 'Rp '.number_format($order->total_price,0,',','.') : '[TBD]') . ".\n3. Pembayaran dilakukan sesuai invoice yang diterbitkan.\n4. Revisi mengikuti ketentuan paket yang dipilih.\n5. Proyek dikerjakan setelah pembayaran diterima.") }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Kesepakatan</button>
          </form>
        @endif
      </div>

      <!-- Invoices -->
      @if($order->invoices->isNotEmpty())
      <div class="dash-panel" style="margin-top:16px">
        <div class="panel-header">
          <div class="panel-title">Invoices Terkait</div>
          <a href="/admin/invoices/create?order_id={{ $order->id }}" class="panel-link">+ Buat Invoice</a>
        </div>
        @foreach($order->invoices as $inv)
        <div class="invoice-item">
          <div class="invoice-meta">
            <span class="invoice-number">{{ $inv->invoice_number }}</span>
          </div>
          <div class="invoice-right">
            <span class="invoice-amount">{{ $inv->formatted_amount }}</span>
            <span class="status-badge" style="--color: {{ $inv->status_color }}">{{ $inv->status_label }}</span>
            <a href="/admin/invoices/{{ $inv->id }}" class="link-icon">→</a>
          </div>
        </div>
        @endforeach
      </div>
      @endif

    </div>
  </div>

</div>
@endsection

@push('scripts')
<script>
async function generateSOW(orderId) {
  const btn = document.getElementById('genSowBtn');
  btn.disabled = true;
  btn.innerHTML = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="animation:spin 1s linear infinite"><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" opacity=".3"/><path d="M21 12a9 9 0 00-9-9"/></svg> Generating...';

  try {
    const res = await fetch(`/admin/orders/${orderId}/generate-sow`, {
      method: 'POST',
      headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]')?.content || '{{ csrf_token() }}', 'Accept': 'application/json' }
    });
    const data = await res.json();
    if (data.success) {
      location.reload();
    } else {
      alert('Gagal generate SOW: ' + (data.error || 'Unknown error'));
    }
  } catch(e) {
    alert('Terjadi kesalahan. Silakan coba lagi.');
  }

  btn.disabled = false;
  btn.innerHTML = '⚡ Generate Otomatis';
}
</script>
<style>@keyframes spin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }</style>
@endpush
