<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class BadghisProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'بادغيس',
            'en_name' => 'Badghis',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'قلعه نو', 'en_name' => 'Qala-e-now', 'is_center' => true],
            ['name' => 'آبکمری', 'en_name' => 'Ab Kamari'],
            ['name' => 'مقر', 'en_name' => 'Muqur'],
            ['name' => 'قادس', 'en_name' => 'Qadis'],
            ['name' => 'بالامرغاب', 'en_name' => 'Bala Murghab'],
            ['name' => 'جوند', 'en_name' => 'Jawand'],
            ['name' => 'غورماچ', 'en_name' => 'Ghormach'],
        ]);
    }
}
