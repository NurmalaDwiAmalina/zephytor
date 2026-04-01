<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Services\DokuService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function pay(Invoice $invoice)
    {
        // Hanya pemilik invoice atau admin
        if (!Auth::user()->isAdmin() && $invoice->user_id !== Auth::id()) {
            abort(403);
        }

        if ($invoice->status === 'paid') {
            return redirect()->back()->with('success', 'Invoice ini sudah lunas.');
        }

        $invoice->load('order.package');
        $customerName  = $invoice->order->customer_name ?? $invoice->user->name;
        $customerEmail = $invoice->user->email !== '-' ? $invoice->user->email : null;

        try {
            $doku = new DokuService();
            $paymentUrl = $doku->createPaymentUrl([
                'amount'          => $invoice->amount,
                'invoice_number'  => $invoice->invoice_number,
                'customer_name'   => $customerName,
                'customer_email'  => $customerEmail,
            ]);

            // Simpan status menunggu pembayaran
            $invoice->update(['status' => 'unpaid']);

            return redirect($paymentUrl);
        } catch (\Exception $e) {
            Log::error('DOKU payment error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal membuat link pembayaran: ' . $e->getMessage());
        }
    }

    public function finish(Request $request)
    {
        // DOKU redirect setelah bayar — cari invoice dari invoice_number
        $invoiceNumber = $request->get('invoice_number') ?? $request->get('order_id');

        $invoice = Invoice::where('invoice_number', $invoiceNumber)->first();

        if (!$invoice) {
            return redirect('/dashboard/invoices')->with('success', 'Pembayaran sedang diproses.');
        }

        return redirect("/dashboard/invoices/{$invoice->id}")
            ->with('success', 'Pembayaran berhasil! Invoice akan diperbarui otomatis.');
    }

    public function cancel(Request $request)
    {
        return redirect('/dashboard/invoices')
            ->with('error', 'Pembayaran dibatalkan.');
    }

    public function notification(Request $request)
    {
        $body    = $request->getContent();
        $headers = array_change_key_case(getallheaders(), CASE_LOWER);

        $doku = new DokuService();

        if (!$doku->verifyNotification($headers, $body)) {
            Log::warning('DOKU notification signature invalid');
            return response()->json(['message' => 'Invalid signature'], 401);
        }

        $data          = json_decode($body, true);
        $invoiceNumber = $data['order']['invoice_number'] ?? null;
        $resultCode    = $data['transaction']['status'] ?? null;

        if (!$invoiceNumber) {
            return response()->json(['message' => 'OK']);
        }

        $invoice = Invoice::where('invoice_number', $invoiceNumber)->first();

        if ($invoice && $resultCode === 'SUCCESS') {
            $invoice->update([
                'status'  => 'paid',
                'paid_at' => now(),
            ]);
        }

        return response()->json(['message' => 'OK']);
    }
}
