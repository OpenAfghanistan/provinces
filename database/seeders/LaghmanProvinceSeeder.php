<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class LaghmanProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'لغمان',
            'en_name' => 'Laghman',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'مهترلام', 'en_name' => 'Mihtarlam', 'is_center' => true],
            ['name' => 'الینگار', 'en_name' => 'Alingar'],
            ['name' => 'الیشنگ', 'en_name' => 'Alishing'],
            ['name' => 'دولت شاه', 'en_name' => 'Dawlat Shah'],
            ['name' => 'قرغه یی', 'en_name' => 'Qarghayi'],
        ]);
    }
}
