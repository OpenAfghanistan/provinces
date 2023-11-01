<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class KunarProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'کنر',
            'en_name' => 'Kunar',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'اسعد آباد', 'en_name' => 'Asadabad', 'is_center' => true],
            ['name' => 'بر کنر', 'en_name' => 'Bar Kunar'],
            ['name' => 'چپه دره', 'en_name' => 'Chapa Dara'],
            ['name' => 'چوکی', 'en_name' => 'Chawkay'],
            ['name' => 'دانگام', 'en_name' => 'Dangam'],
            ['name' => 'دره پیچ', 'en_name' => 'Dara-I-Pech'],
            ['name' => 'غازی اباد', 'en_name' => 'Ghaziabad'],
            ['name' => 'خاص کنر', 'en_name' => 'Khas Kunar'],
            ['name' => 'مروره', 'en_name' => 'Marawara'],
            ['name' => 'نرنگ و بادیل', 'en_name' => 'Narang Wa Badil'],
            ['name' => 'ناړۍ', 'en_name' => 'Nari'],
            ['name' => 'نورگل', 'en_name' => 'Nurgal'],
            ['name' => 'شیگل او شیلتن', 'en_name' => 'Shaygal Wa Shiltan'],
            ['name' => 'سرکانو', 'en_name' => 'Sirkanay'],
            ['name' => 'وته پور', 'en_name' => 'Wata Pur'],
        ]);
    }
}
