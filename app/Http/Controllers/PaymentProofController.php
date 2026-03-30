<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Services\SupabaseStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentProofController extends Controller
{
    public function upload(Request $request, Invoice $invoice)
    {
        if ($invoice->user_id && $invoice->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'proof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
        ], [
            'proof.mimes' => 'File harus berupa JPG, PNG, atau PDF.',
            'proof.max'   => 'Ukuran file maksimal 5MB.',
        ]);

        $file = $request->file('proof');
        $path = "invoices/{$invoice->id}/" . time() . '_' . $file->getClientOriginalName();

        $storage = new SupabaseStorage();

        // Hapus bukti lama jika ada
        if ($invoice->payment_proof) {
            try { $storage->delete($invoice->payment_proof); } catch (\Exception) {}
        }

        $storedPath = $storage->upload($file, $path);

        $invoice->update([
            'payment_proof'      => $storedPath,
            'proof_uploaded_at'  => now(),
            'status'             => 'unpaid', // tetap unpaid, tunggu verifikasi admin
        ]);

        return redirect()->back()->with('success', 'Bukti pembayaran berhasil dikirim! Admin akan memverifikasi segera.');
    }

    public function view(Invoice $invoice)
    {
        // Hanya admin atau pemilik invoice
        if (!Auth::user()->isAdmin() && $invoice->user_id !== Auth::id()) {
            abort(403);
        }

        if (!$invoice->payment_proof) {
            abort(404);
        }

        $storage = new SupabaseStorage();
        $url = $storage->signedUrl($invoice->payment_proof, 300); // 5 menit

        return redirect($url);
    }
}
