<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use ElFactory\AfghanistanProvinces\Models\Province;
use Illuminate\Database\Seeder;

class BamyanProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'بامیان',
            'en_name' => 'Bamyan',
        ]);

        // Create districts
        $province->districts()->createMany([
            // Add districts here...
            // ['name' => 'نام', 'en_name' => 'Name'],
        ]);
    }
}
