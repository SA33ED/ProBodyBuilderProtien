<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Protien;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Sama Omar',
            'email' => 'sama@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$IA8LNVKo4IiijVwziFgHce6vPGCxTjIKt.wH92COjzottHNC10Wyi', // 123456789

        ]);
        $this->call([
            ProtienSeeder::class,
            OrderSeeder::class,
        ]);
    }
}
