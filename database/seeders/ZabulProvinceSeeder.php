<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class ZabulProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'زابل',
            'en_name' => 'Zabul',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'قلات', 'en_name' => 'Qalat', 'is_center' => true],
            ['name' => 'ارغنداب', 'en_name' => 'Argahandab'],
            ['name' => 'اتغار', 'en_name' => 'Atghar'],
            ['name' => 'دای چوپان', 'en_name' => 'Daychopan'],
            ['name' => 'کاکر', 'en_name' => 'Kakar'],
            ['name' => 'میزان', 'en_name' => 'Mizan'],
            ['name' => 'نو بهار', 'en_name' => 'Naw Bahar'],
            ['name' => 'شاه جوی', 'en_name' => 'Shah Joy'],
            ['name' => 'شمولزی', 'en_name' => 'Shamulzayi'],
            ['name' => 'شینکی', 'en_name' => 'Shinkay'],
            ['name' => 'ترنک او جلدک', 'en_name' => 'Tarnak Wa Jaldak'],
        ]);
    }
}
