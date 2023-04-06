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
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Mohammed Saeed',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$IA8LNVKo4IiijVwziFgHce6vPGCxTjIKt.wH92COjzottHNC10Wyi', // 123456789

        ]);

        \App\Models\Protien::factory()->create([

            'name' => 'Ultra Filtered Whey Protein Isolate for Muscle Support & Recovery',

            'price' => '2950',

            'about' => '
            -What Does It Have -11.4 grams of naturally occurring EAAs, including 5.5 grams of naturally occurring BCAAs, and 4.3 grams of naturally occurring Glutamine and Glutamic Acid in each serving to support endurance and muscle recovery
            -Gluten-Free & suitable for Vegetarians
            -What does it do: For Muscle and Recovery Support. Better fit for demanding diet needs such low-carb and low-fat diets
            -When To Use  30-60 minutes after you workout or have it as an anytime snack where you need a protein boost to your balanced diet
            -1 Gram of Carbs Per Serving & 25 Grams of protein per serving.
            ',

            'image' =>'Ultra Filtered Whey Protein Isolate.jpg'

        ]);


        \App\Models\Protien::factory()->create([

            'name' => 'Optimum Nutrition (ON) Gold Standard 100%',
            'price' => '750',
            'about' =>'GOLD STANDARD 100% WHEY BLEND - 24g blended protein consisting of whey protein isolate, whey protein concentrate, and whey peptides to support lean muscle mass - they do not call it the GOLD STANDARD of quality for nothing Whey protein Isolate in the primary source of protein What Does It Have -11 grams of naturally occurring EAAs, including 5.5 grams of naturally occurring BCAAs, and over 4 grams of naturally occurring Glutamine and Glutamic Acid in each serving to support endurance and muscle recovery. Gluten-Free & suitable for Vegetarians 3-4G CARBS, 1-3G SUGAR, AND 1-1.5G FAT, GLUTEN FREE, No Sucralose in Double Rich Chocolate Flavor INSTANTIZED - improves mixability to prevent lumps and clumps',
            'image' =>'Optimum Nutrition (ON) Gold Standard 100%.jpg'

        ]);


        \App\Models\Protien::factory()->create([

            'name' => 'Advanced Sports Nutrition (ASN) | Advanced Mass Maker',

            'price' => '683',

            'about' => '
            -WEIGHT GAIN FORMULA: Protein blend from 5 different sources is designed to increase lean muscle mass gains.
            -SUSTAINED ENERGY: 87g complex carbs provide an energy boost to increase stamina during high-intensity workouts.
            -ESSENTIAL NUTRITION: Essential Vitamins, Minerals & Trace Elements are to boost immunity & support healthy muscle gains.
            -BCAA: Supports faster recovery by preventing muscle soreness and reducing recovery time.
            -EASY TO USE: Advanced Mass Maker dissolves quickly in cold water or milk.

            ',

            'image' =>'Advanced Mass Maker.jpg'
        ]);
    }
}