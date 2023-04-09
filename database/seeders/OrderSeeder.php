<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            "name"=>"Mohammed saeed",
            "phone"=>"01032180690",
            "address"=>"Cairo,Altagmmo3 Elawal,villa 179",
            "quantity"=>"5",
            "message"=>"Nothing",
            "protien_id"=>"2",
        ]);
        Order::create([
            "name" => "Mohammed saeed",
            "phone" => "01032180690",
            "address" => "Cairo,Altagmmo3 Elawal,villa 179",
            "quantity" => "5",
            "message" => "Nothing",
            "protien_id" => "2",
        ]);
    }
}
