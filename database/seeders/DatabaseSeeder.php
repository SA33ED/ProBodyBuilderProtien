<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Mohammed Saeed',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$IA8LNVKo4IiijVwziFgHce6vPGCxTjIKt.wH92COjzottHNC10Wyi', // 123456789

        ]);

        \App\Models\Protien::factory()->create([

            'name' => 'Optimum Nutrition (ON) Gold Standard 100%',
            'price' => '750',
            'about' =>'GOLD STANDARD 100% WHEY BLEND - 24g blended protein consisting of whey protein isolate, whey protein concentrate, and whey peptides to support lean muscle mass - they do not call it the GOLD STANDARD of quality for nothing Whey protein Isolate in the primary source of protein What Does It Have -11 grams of naturally occurring EAAs, including 5.5 grams of naturally occurring BCAAs, and over 4 grams of naturally occurring Glutamine and Glutamic Acid in each serving to support endurance and muscle recovery. Gluten-Free & suitable for Vegetarians 3-4G CARBS, 1-3G SUGAR, AND 1-1.5G FAT, GLUTEN FREE, No Sucralose in Double Rich Chocolate Flavor INSTANTIZED - improves mixability to prevent lumps and clumps',
            'image' =>'Optimum Nutrition (ON) Gold Standard 100%.jpg'
        ]);
    }
}