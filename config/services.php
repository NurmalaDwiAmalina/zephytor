<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'openai' => [
        'key'              => env('OPENAI_API_KEY'),
        'url'              => env('OPENAI_API_URL', 'https://api.openai.com/v1/chat/completions'),
        'model'            => env('OPENAI_MODEL', 'gpt-4o'),
        'max_tokens_analyze' => env('OPENAI_MAX_TOKENS_ANALYZE', 2000),
        'max_tokens_sow'     => env('OPENAI_MAX_TOKENS_SOW', 1000),
    ],

    'thumio' => [
        'key'          => env('THUMIO_KEY'),
        'url_primary'  => env('THUMIO_URL_PRIMARY', 'https://image.thum.io/get/wait/5/width/1200/crop/900/'),
        'url_fallback' => env('THUMIO_URL_FALLBACK', 'https://image.thum.io/get/width/1200/'),
    ],

    'google' => [
        'client_id'     => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect'      => env('GOOGLE_REDIRECT_URI', '/auth/google/callback'),
    ],

];
