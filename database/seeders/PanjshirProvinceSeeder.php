<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class PanjshirProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'پنجشير',
            'en_name' => 'Panjshir',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'بازارک', 'en_name' => 'Bazarak', 'is_center' => true],
            ['name' => 'انابه', 'en_name' => 'Anaba'],
            ['name' => 'دره', 'en_name' => 'Darah'],
            ['name' => 'خنج', 'en_name' => 'Khenj'],
            ['name' => 'پریان', 'en_name' => 'Paryan'],
            ['name' => 'روخه', 'en_name' => 'Rokha'],
            ['name' => 'شوتل', 'en_name' => 'Shotul'],
        ]);
    }
}
