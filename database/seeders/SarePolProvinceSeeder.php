<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class SarePolProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'سرپل',
            'en_name' => 'Sar-e Pol',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'سرپل', 'en_name' => 'Sar-e Pul', 'is_center' => true],
            ['name' => 'بلخاب', 'en_name' => 'Balkhab'],
            ['name' => 'گوسفندی', 'en_name' => 'Gosfandi'],
            ['name' => 'کوهستانات', 'en_name' => 'Kohistanat'],
            ['name' => 'سنگچارک', 'en_name' => 'Sangcharak'],
            ['name' => 'سیاد', 'en_name' => 'Sayyad'],
            ['name' => 'سوزمان قلعه', 'en_name' => 'Sozma Qala'],
        ]);
    }
}
