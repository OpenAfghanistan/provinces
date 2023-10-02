<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use ElFactory\AfghanistanProvinces\Models\Province;
use Illuminate\Database\Seeder;

class PaktiaProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'پکتيا',
            'en_name' => 'Paktia',
        ]);

        // Create districts
        $province->districts()->createMany([
            // Add districts here...
            // ['name' => 'نام', 'en_name' => 'Name'],
        ]);
    }
}
