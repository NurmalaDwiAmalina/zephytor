<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Company / Branding Configuration
    |--------------------------------------------------------------------------
    |
    | All company-specific contact info, social media links, and branding
    | values. Set the corresponding env variables in your .env file.
    |
    */

    'phone_wa'      => env('COMPANY_PHONE_WA', '6285892778882'),
    'phone_display' => env('COMPANY_PHONE_DISPLAY', '+62 858-9277-8882'),
    'email'         => env('COMPANY_EMAIL', 'zephytor@gmail.com'),
    'url'           => env('COMPANY_URL', 'https://zephytor.com'),

    'instagram'     => env('COMPANY_INSTAGRAM', 'https://www.instagram.com/zephytor?igsh=cHBjNXJzMXcyeHln'),
    'tiktok'        => env('COMPANY_TIKTOK', 'https://www.tiktok.com/@zephytor?_r=1&_t=ZS-94nTYfDMvXV'),
    'facebook'      => env('COMPANY_FACEBOOK', 'https://www.facebook.com/share/1CVboN13Nm/'),

    'admin_email'   => env('ADMIN_SEEDER_EMAIL', 'admin@zephytor.com'),
    'admin_name'    => env('ADMIN_SEEDER_NAME', 'Admin Zephytor'),

];
