<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Garmin Forerunner 165',
                'description' => 'Jam tangan lari layar AMOLED super kece.',
                'stock' => 10,
                'image' => 'garmin.jpg'
            ],
            [
                'name' => 'Keyboard Mekanikal',
                'description' => 'Keyboard enak buat writing dan gaming.',
                'stock' => 25,
                'image' => 'keyboard.jpg'
            ]
        ]);
    }
}