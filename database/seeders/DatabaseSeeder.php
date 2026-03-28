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
        // Create admin user — update email to your Google account
        User::updateOrCreate(
            ['email' => 'admin@zephytor.com'],
            [
                'name'  => 'Admin Zephytor',
                'email' => 'admin@zephytor.com',
                'role'  => 'admin',
            ]
        );

        $this->call(PackageSeeder::class);
    }
}
