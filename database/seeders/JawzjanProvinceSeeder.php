<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class JawzjanProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'جوزجان',
            'en_name' => 'Jowzjan',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'شبرغان', 'en_name' => 'Shibirghan', 'is_center' => true],
            ['name' => 'آقچه', 'en_name' => 'Aqcha'],
            ['name' => 'درزآب', 'en_name' => 'Darzab'],
            ['name' => 'فیض  آباد', 'en_name' => 'Fayzabad'],
            ['name' => 'خمآب', 'en_name' => 'Khamyab'],
            ['name' => 'خانقاه', 'en_name' => 'Khaniqa'],
            ['name' => 'خواجه دو کوه', 'en_name' => 'Khwaja Du Koh'],
            ['name' => 'مردیان', 'en_name' => 'Mardyan'],
            ['name' => 'منگجیک', 'en_name' => 'Mingajik'],
            ['name' => 'قرقین', 'en_name' => 'Qarqin'],
            ['name' => 'قوش تپه', 'en_name' => 'Qush Tepa'],
        ]);
    }
}
