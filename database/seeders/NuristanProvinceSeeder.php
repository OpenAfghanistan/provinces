<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class NuristanProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'نورستان',
            'en_name' => 'Nuristan',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'پارون', 'en_name' => 'Paroon', 'is_center' => true],
            ['name' => 'برگیمتال', 'en_name' => 'Bargi Matal'],
            ['name' => 'دو آب', 'en_name' => 'Du Ab'],
            ['name' => 'کامدیش', 'en_name' => 'Kamdesh'],
            ['name' => 'مندول', 'en_name' => 'Mandol'],
            ['name' => 'نورگرام', 'en_name' => 'Nurgaram'],
            ['name' => 'واما', 'en_name' => 'Wama'],
            ['name' => 'وایگل', 'en_name' => 'Waygal'],
        ]);
    }
}
