<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use OpenAfghanistan\Provinces\Models\Province;
use Illuminate\Database\Seeder;

class HelmandProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'هلمند',
            'en_name' => 'Helmand',
        ]);

        // Create districts
        $province->districts()->createMany([
            // Add districts here...
            // ['name' => 'نام', 'en_name' => 'Name'],
        ]);
    }
}
