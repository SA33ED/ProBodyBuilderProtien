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
            "status"=>"2",
            "message"=>"Nothing",
            "protien_id"=>"2",
        ]);
        Order::create([
            "name" => "Sama Omar",
            "phone" => "01015314732",
            "address" => "العاشر من رمضان ، صيدناوي",
            "quantity" => "2",
            "status"=>"1",
            "message" => "Speed in delivery",
            "protien_id" => "2",
        ]);
        Order::create([
            "name"=>"Mohammed saeed",
            "phone"=>"01032180690",
            "address"=>"Cairo,Altagmmo3 Elawal,villa 179",
            "quantity"=>"5",
            "message"=>"Nothing",
            "status"=>"1",
            "protien_id"=>"2",
        ]);
        Order::create([
            "name" => "Sama Omar",
            "phone" => "01015314732",
            "address" => "العاشر من رمضان ، صيدناوي",
            "quantity" => "2",
            "status"=>"0",
            "message" => "Speed in delivery",
            "protien_id" => "2",
        ]);
        Order::create([
            "name" => "Arwaa Salah",
            "phone" => "01015314732",
            "address" => "العاشر من رمضان ، صيدناوي",
            "quantity" => "3",
            "status"=>"0",
            "message" => "Speed in delivery",
            "protien_id" => "1",
        ]);
        Order::create([
            "name" => "Alaa Omar",
            "phone" => "01015314732",
            "address" => "العاشر من رمضان ، صيدناوي",
            "quantity" => "2",
            "message" => "Speed in delivery",
            "status"=>"0",
            "protien_id" => "3",
        ]);
        Order::create([
            "name" => "Alaa Omar",
            "phone" => "01015314732",
            "address" => "العاشر من رمضان ، صيدناوي",
            "quantity" => "2",
            "message" => "Speed in delivery",
            "status"=>"0",
            "protien_id" => "3",
            'deleted_at' => '2023-04-07 11:45:16'
        ]);
    }
}
