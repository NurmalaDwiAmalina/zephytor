<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Http;

class SupabaseStorage
{
    private string $url;
    private string $key;
    private string $bucket = 'payment-proofs';

    public function __construct()
    {
        $this->url = rtrim(config('services.supabase.url'), '/');
        $this->key = trim(config('services.supabase.service_key'));
    }

    public function upload(UploadedFile $file, string $path): string
    {
        // Sanitize filename — hapus spasi dan karakter aneh
        $ext      = $file->getClientOriginalExtension();
        $safeName = preg_replace('/[^a-zA-Z0-9_\-]/', '_', pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));
        $safePath = dirname($path) . '/' . $safeName . '.' . $ext;

        $response = Http::withHeaders([
            'Authorization' => "Bearer {$this->key}",
            'Content-Type'  => $file->getMimeType(),
            'x-upsert'      => 'true',
        ])->withBody(
            file_get_contents($file->getRealPath()),
            $file->getMimeType()
        )->post("{$this->url}/storage/v1/object/{$this->bucket}/{$safePath}");

        if ($response->failed()) {
            throw new \Exception('Upload gagal: ' . $response->body());
        }

        return $safePath;
    }

    public function signedUrl(string $path, int $expiresIn = 3600): string
    {
        $response = Http::withHeaders([
            'Authorization' => "Bearer {$this->key}",
            'Content-Type'  => 'application/json',
        ])->post("{$this->url}/storage/v1/object/sign/{$this->bucket}/{$path}", [
            'expiresIn' => $expiresIn,
        ]);

        if ($response->failed()) {
            throw new \Exception('Gagal buat signed URL: ' . $response->body());
        }

        // Supabase bisa return 'signedURL' atau 'signedUrl'
        $signedURL = $response->json('signedURL') ?? $response->json('signedUrl');

        if (!$signedURL) {
            throw new \Exception('Signed URL kosong: ' . $response->body());
        }

        if (str_starts_with($signedURL, 'http')) {
            return $signedURL;
        }

        return $this->url . $signedURL;
    }

    public function delete(string $path): void
    {
        Http::withHeaders([
            'Authorization' => "Bearer {$this->key}",
        ])->delete("{$this->url}/storage/v1/object/{$this->bucket}", [
            'prefixes' => [$path],
        ]);
    }
}
