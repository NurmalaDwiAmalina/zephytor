<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class DokuService
{
    private string $clientId;
    private string $secretKey;
    private string $baseUrl;

    public function __construct()
    {
        $this->clientId  = config('services.doku.client_id');
        $this->secretKey = config('services.doku.secret_key');
        $this->baseUrl   = config('services.doku.sandbox')
            ? 'https://api-sandbox.doku.com'
            : 'https://api.doku.com';
    }

    public function createPaymentUrl(array $data): string
    {
        $path      = '/checkout/v1/payment';
        $requestId = uniqid('zephytor-', true);
        $timestamp = now()->format('Y-m-d\TH:i:s\Z');

        $body = [
            'order' => [
                'amount'              => (int) $data['amount'],
                'invoice_number'      => $data['invoice_number'],
                'currency'            => 'IDR',
                'callback_url'        => route('payment.finish'),
                'callback_url_cancel' => route('payment.cancel'),
                'notification_url'    => route('payment.notification'),
            ],
            'payment' => [
                'payment_due_date' => 60,
            ],
            'customer' => [
                'name'  => $data['customer_name'],
                'email' => $data['customer_email'] ?: 'noreply@zephytor.online',
            ],
        ];

        $bodyJson = json_encode($body);
        $digest   = base64_encode(hash('sha256', $bodyJson, true));

        $message = implode("\n", [
            "Client-Id:{$this->clientId}",
            "Request-Id:{$requestId}",
            "Request-Timestamp:{$timestamp}",
            "Request-Target:{$path}",
            "Digest:{$digest}",
        ]);

        $signature = base64_encode(hash_hmac('sha256', $message, $this->secretKey, true));

        $response = Http::withHeaders([
            'Client-Id'         => $this->clientId,
            'Request-Id'        => $requestId,
            'Request-Timestamp' => $timestamp,
            'Signature'         => "HMACSHA256={$signature}",
            'Content-Type'      => 'application/json',
        ])->post("{$this->baseUrl}{$path}", $body);

        if ($response->failed()) {
            throw new \Exception('DOKU error ' . $response->status() . ': ' . $response->body());
        }

        $url = $response->json('payment.url');

        if (!$url) {
            throw new \Exception('DOKU response OK but no payment URL: ' . $response->body());
        }

        return $url;
    }

    public function verifyNotification(array $headers, string $body): bool
    {
        $path      = '/payment/notify';
        $requestId = $headers['request-id'] ?? '';
        $timestamp = $headers['request-timestamp'] ?? '';
        $digest    = base64_encode(hash('sha256', $body, true));

        $message = implode("\n", [
            "Client-Id:{$this->clientId}",
            "Request-Id:{$requestId}",
            "Request-Timestamp:{$timestamp}",
            "Request-Target:{$path}",
            "Digest:{$digest}",
        ]);

        $expected  = 'HMACSHA256=' . base64_encode(hash_hmac('sha256', $message, $this->secretKey, true));
        $signature = $headers['signature'] ?? '';

        return hash_equals($expected, $signature);
    }
}
