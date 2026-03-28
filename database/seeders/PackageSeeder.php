<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PackageSeeder extends Seeder
{
    public function run(): void
    {
        $phone = config('company.phone_wa');

        $packages = [
            [
                'name'          => 'Landing Page',
                'slug'          => 'landing-page',
                'description'   => 'Cocok untuk sales, personal branding individual, dkk',
                'price'         => 300000,
                'price_display' => 'Rp 300rb',
                'badge'         => null,
                'features'      => [
                    '1 Halaman Responsif (Mobile Friendly)',
                    'Copywriting Persuasif Basic',
                    'Akses Dashboard Pengelolaan',
                    'Integrasi Link Sosmed & Galeri',
                    'Gratis Domain .online / .site',
                ],
                'guarantee'     => 'Garansi 1 Bulan',
                'wa_link'       => "https://wa.me/{$phone}?text=Halo+Zephytor,+saya+tertarik+dengan+Paket+Landing+Page",
                'is_popular'    => false,
                'is_active'     => true,
                'sort_order'    => 1,
            ],
            [
                'name'          => 'Paket Premium',
                'slug'          => 'paket-premium',
                'description'   => 'Cocok untuk sales top achiever & bisnis umkm',
                'price'         => 3500000,
                'price_display' => 'Rp 3.5jt',
                'badge'         => 'BEST SELLER',
                'features'      => [
                    '5 Halaman Premium (Home, About, dll)',
                    'Premium Sales Driven Copywriting',
                    '3 Email Bisnis Terintegrasi',
                    'Full SEO Optimized (Ready to Rank)',
                    'Video Tutorial Panduan Admin',
                    'Gratis Domain .com, .co.id, .id',
                ],
                'guarantee'     => 'Garansi 3 Bulan',
                'wa_link'       => "https://wa.me/{$phone}?text=Halo+Zephytor,+saya+tertarik+dengan+Paket+Premium+3.5jt",
                'is_popular'    => true,
                'is_active'     => true,
                'sort_order'    => 2,
            ],
            [
                'name'          => 'Paket Enterprise',
                'slug'          => 'paket-enterprise',
                'description'   => 'Harga Menyesuaikan Kebutuhan',
                'price'         => null,
                'price_display' => 'Custom',
                'badge'         => null,
                'features'      => [
                    'Unlimited Halaman (Custom)',
                    'Desain Eksklusif UI/UX Mandiri',
                    'Fitur Custom (CMS / Filter / Database)',
                    'Integrasi API / Payment Gateway',
                    'Jaminan PageSpeed 90+ Score',
                    'Premium Sales Driven Copywriting',
                    'Email Bisnis Terintegrasi',
                    'Full SEO Optimized (Ready to Rank)',
                    'Video Tutorial Panduan Admin',
                    'Gratis Domain .com, .co.id, .id',
                ],
                'guarantee'     => 'Garansi 12 Bulan',
                'wa_link'       => "https://wa.me/{$phone}?text=Halo+Zephytor,+saya+ingin+konsultasi+Paket+Enterprise",
                'is_popular'    => false,
                'is_active'     => true,
                'sort_order'    => 3,
            ],
        ];

        foreach ($packages as $pkg) {
            Package::updateOrCreate(['slug' => $pkg['slug']], $pkg);
        }
    }
}
