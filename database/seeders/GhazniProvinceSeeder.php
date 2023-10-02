<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use ElFactory\AfghanistanProvinces\Models\Province;
use Illuminate\Database\Seeder;

class GhazniProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'غزني',
            'en_name' => 'Ghazni',
        ]);

        // Create districts
        $province->districts()->createMany([
            // Add districts here...
            // ['name' => 'نام', 'en_name' => 'Name'],
        ]);
    }
}
