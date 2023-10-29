<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class FarahProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'فراه',
            'en_name' => 'Farah',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'مرکز فراه', 'en_name' => 'Farah', 'is_center' => true],
            ['name' => 'پشت رود', 'en_name' => 'Pushtrud'],
            ['name' => 'خاک سفید', 'en_name' => 'Khak-e Safed'],
            ['name' => 'قلعه کاه', 'en_name' => 'Qala-e Kah'],
            ['name' => 'شیب کوه', 'en_name' => 'Shib koh'],
            ['name' => 'بالا بلوک', 'en_name' => 'Bala Kuluk'],
            ['name' => 'اناردره', 'en_name' => 'Anar Dara'],
            ['name' => 'بکواه', 'en_name' => 'Bakwa'],
            ['name' => 'لاش جوین', 'en_name' => 'Lash-e Juwayn'],
            ['name' => 'گلستان', 'en_name' => 'Gulistan'],
            ['name' => 'پرچمن', 'en_name' => 'Pur Chaman'],
        ]);
    }
}
