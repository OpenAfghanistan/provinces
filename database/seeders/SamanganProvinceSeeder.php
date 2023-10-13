<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use OpenAfghanistan\Provinces\Models\Province;
use Illuminate\Database\Seeder;

class SamanganProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'سمنگان',
            'en_name' => 'Samangan',
        ]);

        // Create districts
        $province->districts()->createMany([
            // Add districts here...
            // ['name' => 'نام', 'en_name' => 'Name'],
        ]);
    }
}
