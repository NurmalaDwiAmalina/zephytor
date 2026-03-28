<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Create admin user — set ADMIN_SEEDER_EMAIL and ADMIN_SEEDER_NAME in .env
        User::updateOrCreate(
            ['email' => config('company.admin_email')],
            [
                'name'  => config('company.admin_name'),
                'email' => config('company.admin_email'),
                'role'  => 'admin',
            ]
        );

        $this->call(PackageSeeder::class);
    }
}
