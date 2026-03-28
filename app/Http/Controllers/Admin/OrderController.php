<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::with(['user', 'package'])
            ->when($request->status, fn($q) => $q->where('status', $request->status))
            ->latest()
            ->paginate(15);

        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $order->load(['user', 'package', 'invoices']);
        return view('admin.orders.show', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'status'       => 'required|in:pending,in_progress,completed,cancelled',
            'total_price'  => 'nullable|numeric',
            'notes'        => 'nullable|string',
        ]);

        $order->update($request->only(['status', 'total_price', 'notes']));

        return redirect()->back()->with('success', 'Status order berhasil diperbarui.');
    }

    public function generateSow(Order $order)
    {
        $order->load('package');

        $apiKey = config('services.openai.key');
        if (!$apiKey) {
            return response()->json(['error' => 'OpenAI API key tidak dikonfigurasi.'], 500);
        }

        $prompt = "Buatkan scope of work profesional dalam Bahasa Indonesia untuk proyek pengembangan website dengan detail berikut:\n\n"
            . "Nama Paket: {$order->package->name}\n"
            . "Harga: {$order->package->price_display}\n"
            . "Fitur Paket:\n" . implode("\n", $order->package->features) . "\n"
            . "Catatan Klien: " . ($order->notes ?? 'Tidak ada') . "\n\n"
            . "Buatkan scope of work yang mencakup:\n"
            . "1. Deskripsi singkat proyek\n"
            . "2. Deliverables (hasil yang akan diberikan)\n"
            . "3. Timeline pengerjaan\n"
            . "4. Hal-hal yang tidak termasuk dalam scope\n"
            . "5. Ketentuan revisi\n\n"
            . "Format sebagai JSON dengan keys: description, deliverables (array), timeline, exclusions (array), revision_policy";

        try {
            $response = Http::withToken($apiKey)->post(config('services.openai.url'), [
                'model' => config('services.openai.model'),
                'messages' => [
                    ['role' => 'system', 'content' => 'Kamu adalah konsultan proyek website profesional. Selalu jawab dalam format JSON valid.'],
                    ['role' => 'user', 'content' => $prompt],
                ],
                'response_format' => ['type' => 'json_object'],
                'max_tokens' => (int) config('services.openai.max_tokens_sow'),
            ]);

            if ($response->failed()) {
                throw new \Exception('OpenAI request failed: ' . $response->status());
            }

            $sow = json_decode($response->json()['choices'][0]['message']['content'], true);

            if (!$sow) {
                throw new \Exception('Invalid JSON response from OpenAI.');
            }
        } catch (\Exception $e) {
            // Fallback scope of work
            $sow = $this->defaultSow($order);
        }

        $order->update(['scope_of_work' => $sow]);

        return response()->json(['success' => true, 'sow' => $sow]);
    }

    public function storeAgreement(Request $request, Order $order)
    {
        $request->validate([
            'agreement_text' => 'required|string',
        ]);

        $order->update([
            'agreement_data' => [
                'text'      => $request->agreement_text,
                'agreed_by' => auth()->user()->name,
                'agreed_at' => now()->toDateTimeString(),
            ],
            'agreed_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Kesepakatan berhasil disimpan.');
    }

    private function defaultSow(Order $order): array
    {
        return [
            'description'     => "Pengembangan website {$order->package->name} sesuai spesifikasi paket yang dipilih.",
            'deliverables'    => $order->package->features ?? [],
            'timeline'        => 'Estimasi pengerjaan 3-7 hari kerja tergantung kompleksitas konten.',
            'exclusions'      => [
                'Konten teks dan gambar dari klien',
                'Domain dan hosting (kecuali tertera di paket)',
                'Fitur di luar spesifikasi paket',
            ],
            'revision_policy' => 'Maksimal 3 kali revisi dalam masa garansi. Revisi mayor dihitung terpisah.',
        ];
    }
}
