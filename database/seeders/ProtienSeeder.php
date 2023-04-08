<?php

namespace Database\Seeders;

use App\Models\Protien;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProtienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Protien::create([
            'name' => 'Optimum Nutrition (ON) Gold Standard 100%',
            'price' => '750',
            'about' => 'GOLD STANDARD 100% WHEY BLEND - 24g blended protein consisting of whey protein isolate, whey protein concentrate, and whey peptides to support lean muscle mass - they do not call it the GOLD STANDARD of quality for nothing Whey protein Isolate in the primary source of protein What Does It Have -11 grams of naturally occurring EAAs, including 5.5 grams of naturally occurring BCAAs, and over 4 grams of naturally occurring Glutamine and Glutamic Acid in each serving to support endurance and muscle recovery. Gluten-Free & suitable for Vegetarians 3-4G CARBS, 1-3G SUGAR, AND 1-1.5G FAT, GLUTEN FREE, No Sucralose in Double Rich Chocolate Flavor INSTANTIZED - improves mixability to prevent lumps and clumps',
            'image' => 'Optimum Nutrition (ON) Gold Standard 100%.jpg',
        ]);


        Protien::create([
            'name' => 'Advanced Sports Nutrition (ASN) | Advanced Mass Maker',

            'price' => '683',

            'about' => '
            -WEIGHT GAIN FORMULA: Protein blend from 5 different sources is designed to increase lean muscle mass gains.
            -SUSTAINED ENERGY: 87g complex carbs provide an energy boost to increase stamina during high-intensity workouts.
            -ESSENTIAL NUTRITION: Essential Vitamins, Minerals & Trace Elements are to boost immunity & support healthy muscle gains.
            -BCAA: Supports faster recovery by preventing muscle soreness and reducing recovery time.
            -EASY TO USE: Advanced Mass Maker dissolves quickly in cold water or milk.

            ',

            'image' => 'Advanced Mass Maker.jpg'
        ]);


        Protien::create([
            'name' => 'Ultra Filtered Whey Protein Isolate for Muscle Support & Recovery',

            'price' => '2950',

            'about' => '
            -What Does It Have -11.4 grams of naturally occurring EAAs, including 5.5 grams of naturally occurring BCAAs, and 4.3 grams of naturally occurring Glutamine and Glutamic Acid in each serving to support endurance and muscle recovery
            -Gluten-Free & suitable for Vegetarians
            -What does it do: For Muscle and Recovery Support. Better fit for demanding diet needs such low-carb and low-fat diets
            -When To Use  30-60 minutes after you workout or have it as an anytime snack where you need a protein boost to your balanced diet
            -1 Gram of Carbs Per Serving & 25 Grams of protein per serving.
            ',

            'image' => 'Ultra Filtered Whey Protein Isolate.jpg'
        ]);


        Protien::create([
            'name' => 'carbohid',

            'price' => '7500',

            'about' => '
            -WEIGHT GAIN FORMULA: Protein blend from 5 different sources is designed to increase lean muscle mass gains.
            -SUSTAINED ENERGY: 87g complex carbs provide an energy boost to increase stamina during high-intensity workouts.
            -ESSENTIAL NUTRITION: Essential Vitamins, Minerals & Trace Elements are to boost immunity & support healthy muscle gains.
            -BCAA: Supports faster recovery by preventing muscle soreness and reducing recovery time.
            -EASY TO USE: Advanced Mass Maker dissolves quickly in cold water or milk.

            ',

            'image' => 'carbohid.jpg',

            'deleted_at' => '2023-04-07 11:45:16'
        ]);

        Protien::create([
            'name' => 'Optimum Nutrition (ON) Platinum Hydrowhey Protein Powder',

            'price' => '2950',

            'about' => '
            Ones most advanced whey exceeding all expectations
            Faster delivery advanced hydrolyzed whey protein isolates
            30 grams ultra-pure protein per serving supports your muscle building goals
            15.5 grams naturally occurring & added EAAS supports muscle recovery and growth
            Great any time protein source perfect for post workout recovery, between meals, or anytime additional protein is needed in your diet',

            'image' => 'optimum-nutrition-(on)-platinum-hydrowhey-protein-powder-1680962458.jpg',

            
        ]);

        Protien::create([
            'name' => 'Muscletech NitroTech Whey Gold Protein Powder, Double Rich Chocolate, 5.5lbs, 76 Servings',

            'price' => '7500',

            'about' => 'Brand: Muscletech
            Easy to maintain
            Designed to perfection
            Ergonomic design',

            'image' => 'muscletech-nitrotech-whey-gold-protein-powder,-double-rich-chocolate,-5.5lbs,-76-servings-1680962511.jpg',


        ]);
    }
}