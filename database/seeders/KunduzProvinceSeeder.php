<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class KunduzProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'کندز',
            'en_name' => 'Kunduz',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'کندوز', 'en_name' => 'Kunduz', 'is_center' => true],
            ['name' => 'علي آباد', 'en_name' => 'Ali Abad'],
            ['name' => 'ارچي', 'en_name' => 'Archi'],
            ['name' => 'چار دره', 'en_name' => 'Chahar Dara'],
            ['name' => 'امام صیب', 'en_name' => 'Imam Sahib'],
            ['name' => 'خان آباد', 'en_name' => 'Khan Abad'],
            ['name' => 'قلعه ذال', 'en_name' => 'Qalay-I-Zal'],
        ]);
    }
}
