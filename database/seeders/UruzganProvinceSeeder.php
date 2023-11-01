<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class UruzganProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'ارزگان',
            'en_name' => 'Uruzgan',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'ترینکوت', 'en_name' => 'Tarin Kowt', 'is_center' => true],
            ['name' => 'چوره', 'en_name' => 'Chora'],
            ['name' => 'دهراوود', 'en_name' => 'Deh Rahwod'],
            ['name' => 'ارزگان خاص', 'en_name' => 'Khas Uruzgan'],
            ['name' => 'شهید حساس', 'en_name' => 'Shahidi Hassas'],
        ]);
    }
}
