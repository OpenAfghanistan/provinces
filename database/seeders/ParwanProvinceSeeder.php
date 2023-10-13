<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use OpenAfghanistan\Provinces\Models\Province;
use Illuminate\Database\Seeder;

class ParwanProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'پروان',
            'en_name' => 'Parwan',
        ]);

        // Create districts
        $province->districts()->createMany([
            // Add districts here...
            // ['name' => 'نام', 'en_name' => 'Name'],
        ]);
    }
}
