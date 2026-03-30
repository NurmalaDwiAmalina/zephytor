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
        $this->key = config('services.supabase.service_key');
    }

    public function upload(UploadedFile $file, string $path): string
    {
        $response = Http::withHeaders([
            'Authorization' => "Bearer {$this->key}",
            'Content-Type'  => $file->getMimeType(),
            'x-upsert'      => 'true',
        ])->withBody(
            file_get_contents($file->getRealPath()),
            $file->getMimeType()
        )->post("{$this->url}/storage/v1/object/{$this->bucket}/{$path}");

        if ($response->failed()) {
            throw new \Exception('Upload gagal: ' . $response->body());
        }

        return $path;
    }

    public function signedUrl(string $path, int $expiresIn = 3600): string
    {
        $response = Http::withHeaders([
            'Authorization' => "Bearer {$this->key}",
        ])->post("{$this->url}/storage/v1/object/sign/{$this->bucket}/{$path}", [
            'expiresIn' => $expiresIn,
        ]);

        if ($response->failed()) {
            throw new \Exception('Gagal buat signed URL.');
        }

        return $this->url . $response->json('signedURL');
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
