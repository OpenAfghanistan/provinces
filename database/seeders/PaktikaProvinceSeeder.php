<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class PaktikaProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'پکتيکا',
            'en_name' => 'Paktika',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'شرن', 'en_name' => 'Sharan', 'is_center' => true],
            ['name' => 'دیله', 'en_name' => 'Dila'],
            ['name' => 'گیان', 'en_name' => 'Gayan'],
            ['name' => 'گومال', 'en_name' => 'Gomal'],
            ['name' => 'جانی خیل', 'en_name' => 'Jani Khel'],
            ['name' => 'مته خان', 'en_name' => 'Mata Khan'],
            ['name' => 'نیکه', 'en_name' => 'Nika'],
            ['name' => 'اومنا', 'en_name' => 'Omna'],
            ['name' => 'سره حوزه', 'en_name' => 'Sar Hawza'],
            ['name' => 'سروبی', 'en_name' => 'Sarobi'],
            ['name' => 'تیروه', 'en_name' => 'Terwa'],
            ['name' => 'اورگون', 'en_name' => 'Urgun'],
            ['name' => 'وازه خوا', 'en_name' => 'Waza Khwa'],
            ['name' => 'ور مامی', 'en_name' => 'Wor Mamay'],
            ['name' => 'یحی خیل', 'en_name' => 'Yahya Khel'],
            ['name' => 'یوسف خیل', 'en_name' => 'Yosuf Khel'],
            ['name' => 'زرغون شهر', 'en_name' => 'Zarghun Shahr'],
            ['name' => 'زیروک', 'en_name' => 'Ziruk'],
        ]);
    }
}
