<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class GhorProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'غور',
            'en_name' => 'Ghor',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'چغچران', 'en_name' => 'Chaghcharan', 'is_center' => true],
            ['name' => 'چارسده', 'en_name' => 'Charsada'],
            ['name' => 'دولت یار', 'en_name' => 'Dawlat Yar'],
            ['name' => 'دولینه', 'en_name' => 'Du Layna'],
            ['name' => 'لعل و سر جنگل', 'en_name' => 'Lal Wa Sarjangal'],
            ['name' => 'پسابند', 'en_name' => 'Pasaband'],
            ['name' => 'ساغر', 'en_name' => 'Saghar'],
            ['name' => 'شهرک', 'en_name' => 'Shahrak'],
            ['name' => 'تایواره', 'en_name' => 'Taywara'],
            ['name' => 'تولک', 'en_name' => 'Tulak'],
        ]);
    }
}
