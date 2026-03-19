<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnalyzeController extends Controller
{
    public function index(Request $request)
    {
        $url = $request->query('url');
        if (!$url) {
            return redirect('/');
        }
        return view('analyze', ['url' => $url]);
    }

    public function analyze(Request $request)
    {
        $request->validate(['url' => 'required|url']);
        $url = $request->input('url');

        $thumioKey = config('services.thumio.key');
        // Step 1: Download screenshot from thum.io first
        $screenshotUrlRaw = 'https://image.thum.io/get/' . ($thumioKey ? 'auth/' . $thumioKey . '/' : '') . 'wait/5/width/1200/crop/900/' . $url;
        
        try {
            $imageResponse = Http::timeout(90)->get($screenshotUrlRaw);
            
            // Fallback: If 403 (quota or auth error), try without the key
            if ($imageResponse->status() === 403 && $thumioKey) {
                $screenshotUrlRaw = 'https://image.thum.io/get/wait/5/width/1200/crop/900/' . $url;
                $imageResponse = Http::timeout(90)->get($screenshotUrlRaw);
            }

            if (!$imageResponse->successful()) {
                throw new \Exception("Thum.io returned status: " . $imageResponse->status());
            }
            
            $imageData = base64_encode($imageResponse->body());
            $screenshotBase64 = 'data:image/png;base64,' . $imageData;
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error'   => 'Gagal memproses gambar website: ' . $e->getMessage() . '. Pastikan URL website dapat diakses dan coba lagi.',
            ], 500);
        }

        // Step 2: Send to OpenAI
        $apiKey = config('services.openai.key');
        if (!$apiKey) {
            return response()->json([
                'success' => false,
                'error'   => 'Konfigurasi API Key OpenAI belum diset di server. Silakan hubungi admin.',
            ], 500);
        }

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
            'Content-Type'  => 'application/json',
        ])->timeout(120)->post('https://api.openai.com/v1/chat/completions', [
            'model'           => 'gpt-4o',
            'max_tokens'      => 2000,
            'response_format' => ['type' => 'json_object'],
            'messages'        => [
                [
                    'role'    => 'system',
                    'content' => 'You are a professional UI/UX designer and web performance analyst. You will analyze a screenshot of a website. The website is NOT thum.io; thum.io is just the service used to capture the image. ALWAYS focus on the actual website content shown in the image. NEVER mention "thum.io" or "image.thum.io" in your response. Always respond with valid JSON only. Be specific and constructive in your analysis.',
                ],
                [
                    'role'    => 'user',
                    'content' => [
                        [
                            'type'      => 'image_url',
                            'image_url' => ['url' => $screenshotBase64, 'detail' => 'high'],
                        ],
                        [
                            'type' => 'text',
                            'text' => $this->buildPrompt($url),
                        ],
                    ],
                ],
            ],
        ]);

        if ($response->failed()) {
            return response()->json([
                'success' => false,
                'error'   => 'Gagal menghubungi OpenAI. Error: ' . ($response->json('error.message') ?? $response->status()),
            ], 500);
        }

        $content = $response->json('choices.0.message.content');
        $data    = json_decode($content, true);

        if (!$data) {
            return response()->json([
                'success' => false,
                'error'   => 'Gagal memproses respons dari AI.',
            ], 500);
        }

        return response()->json([
            'success'    => true,
            'data'       => $data,
            'screenshot' => $screenshotUrlRaw,
        ]);
    }

    private function buildPrompt(string $url): string
    {
        return <<<PROMPT
Analisa screenshot website ini secara mendalam dari perspektif UI (User Interface) dan UX (User Experience).
Website yang dianalisa adalah: {$url}
PENTING: Abaikan tanda air atau referensi ke layanan pengambil gambar (seperti thum.io). Fokuslah sepenuhnya pada desain website {$url}. Jangan pernah menyebutkan "thum.io" dalam analisa Anda.

Berikan penilaian jujur dan konstruktif. Kembalikan HANYA JSON dengan struktur berikut:

{
  "overall_score": <angka 0-100>,
  "grade": <"A+"|"A"|"B+"|"B"|"C+"|"C"|"D">,
  "summary": "<ringkasan analisa 2-3 kalimat dalam Bahasa Indonesia>",
  "categories": [
    {
      "name": "Visual Design",
      "score": <0-100>,
      "description": "<deskripsi singkat dalam Bahasa Indonesia>",
      "positives": ["<hal positif 1>", "<hal positif 2>"],
      "issues": ["<masalah 1>", "<masalah 2>"]
    },
    {
      "name": "Typography",
      "score": <0-100>,
      "description": "<deskripsi singkat dalam Bahasa Indonesia>",
      "positives": [],
      "issues": []
    },
    {
      "name": "Color Scheme",
      "score": <0-100>,
      "description": "<deskripsi singkat dalam Bahasa Indonesia>",
      "positives": [],
      "issues": []
    },
    {
      "name": "Layout & Spacing",
      "score": <0-100>,
      "description": "<deskripsi singkat dalam Bahasa Indonesia>",
      "positives": [],
      "issues": []
    },
    {
      "name": "Navigation & UX",
      "score": <0-100>,
      "description": "<deskripsi singkat dalam Bahasa Indonesia>",
      "positives": [],
      "issues": []
    },
    {
      "name": "Call-to-Action",
      "score": <0-100>,
      "description": "<deskripsi singkat dalam Bahasa Indonesia>",
      "positives": [],
      "issues": []
    }
  ],
  "top_recommendations": [
    "<rekomendasi paling penting 1>",
    "<rekomendasi penting 2>",
    "<rekomendasi penting 3>",
    "<rekomendasi penting 4>"
  ]
}
PROMPT;
    }
}
