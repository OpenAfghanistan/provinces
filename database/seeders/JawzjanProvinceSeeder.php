<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use OpenAfghanistan\Provinces\Models\Province;
use Illuminate\Database\Seeder;

class JawzjanProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'جوزجان',
            'en_name' => 'Jawzjan',
        ]);

        // Create districts
        $province->districts()->createMany([
            // Add districts here...
            // ['name' => 'نام', 'en_name' => 'Name'],
        ]);
    }
}
