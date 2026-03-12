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

        $screenshotUrl = 'https://image.thum.io/get/width/1200/crop/900/' . $url;

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('services.openai.key'),
            'Content-Type'  => 'application/json',
        ])->timeout(90)->post('https://api.openai.com/v1/chat/completions', [
            'model'           => 'gpt-4o',
            'max_tokens'      => 2000,
            'response_format' => ['type' => 'json_object'],
            'messages'        => [
                [
                    'role'    => 'system',
                    'content' => 'You are a professional UI/UX designer and web performance analyst. Always respond with valid JSON only. Be specific and constructive in your analysis.',
                ],
                [
                    'role'    => 'user',
                    'content' => [
                        [
                            'type'      => 'image_url',
                            'image_url' => ['url' => $screenshotUrl, 'detail' => 'high'],
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
                'error'   => 'Gagal menghubungi OpenAI. Pastikan OPENAI_API_KEY sudah diset dengan benar.',
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
            'screenshot' => $screenshotUrl,
        ]);
    }

    private function buildPrompt(string $url): string
    {
        return <<<PROMPT
Analisa screenshot website ini secara mendalam dari perspektif UI (User Interface) dan UX (User Experience).
Website yang dianalisa: {$url}

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
