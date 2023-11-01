<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

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
            ['name' => 'گردیز', 'en_name' => 'Gardez', 'is_center' => true],
            ['name' => 'احمد آباد', 'en_name' => 'Ahmadabad'],
            ['name' => 'څمکنی', 'en_name' => 'Chamkani'],
            ['name' => 'دند او پتان', 'en_name' => 'Dand Wa Patan'],
            ['name' => 'جاجی اریوب', 'en_name' => 'Jaji'],
            ['name' => 'جانی خیل', 'en_name' => 'Jani Khail'],
            ['name' => 'لژه احمد خیل', 'en_name' => 'Lazha Ahmad Khel'],
            ['name' => 'سید کرم', 'en_name' => 'Sayed Karam'],
            ['name' => 'شواک', 'en_name' => 'Shwak'],
            ['name' => 'وزی ځدراڼ', 'en_name' => 'Wuza Zadran'],
            ['name' => 'زرمت', 'en_name' => 'Zurmat'],
            ['name' => 'برمل', 'en_name' => 'Barmal'],
            ['name' => 'میرزاکا', 'en_name' => 'Mirzaka'],
        ]);
    }
}
