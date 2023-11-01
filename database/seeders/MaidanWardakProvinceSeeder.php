<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class MaidanWardakProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'ميدان وردگ',
            'en_name' => 'MaidanWardak',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'میدان شهر', 'en_name' => 'Maydan Shahr', 'is_center' => true],
            ['name' => 'چک وردگ', 'en_name' => 'Chaki Wardak'],
            ['name' => 'دایمیرداد', 'en_name' => 'Day Mirdad'],
            ['name' => 'حصۀاول بهسود', 'en_name' => 'Hisa-I-Awali Bihsud'],
            ['name' => 'جغتو', 'en_name' => 'Jaghatu'],
            ['name' => 'جلریز', 'en_name' => 'Jalrez'],
            ['name' => 'مرکز بهسود', 'en_name' => 'Markazi Bihsud'],
            ['name' => 'نرخ', 'en_name' => 'Nirkh'],
            ['name' => 'سید آباد', 'en_name' => 'Saydabad'],
        ]);
    }
}
