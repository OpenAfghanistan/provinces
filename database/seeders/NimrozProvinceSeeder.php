<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class NimrozProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'نيمروز',
            'en_name' => 'Nimroz',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'زرنچ', 'en_name' => 'Zaranj', 'is_center' => true],
            ['name' => 'چهاربورجه', 'en_name' => 'Chahar Burjak'],
            ['name' => 'چخانسور', 'en_name' => 'Chakhansur'],
            ['name' => 'کنگ', 'en_name' => 'Kang'],
            ['name' => 'خاش رود', 'en_name' => 'Khash Rod'],
        ]);
    }
}
