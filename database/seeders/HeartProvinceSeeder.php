<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class HeartProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'هرات',
            'en_name' => 'Heart',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'شهر هرات', 'en_name' => 'Herat City', 'is_center' => true],
            ['name' => 'ادرسکن', 'en_name' => 'Adraskan'],
            ['name' => 'چشت شریف', 'en_name' => 'Chisht e Sharif'],
            ['name' => 'فارسی', 'en_name' => 'Farsi'],
            ['name' => 'غوریان', 'en_name' => 'Ghoryan'],
            ['name' => 'گلران', 'en_name' => 'Gulran'],
            ['name' => 'گزره', 'en_name' => 'Guzara'],
            ['name' => 'انجیل', 'en_name' => 'Enjil'],
            ['name' => 'کارخ', 'en_name' => 'Karukh'],
            ['name' => 'کوهسان', 'en_name' => 'Kohsan'],
            ['name' => 'کشک', 'en_name' => 'Kushk'],
            ['name' => 'کشک کهنه', 'en_name' => 'Kushki Kuhna'],
            ['name' => 'اوبه', 'en_name' => 'Obe'],
            ['name' => 'پشتون زرغون', 'en_name' => 'Pashtun Zarghun'],
            ['name' => 'شیندند', 'en_name' => 'Shindand'],
            ['name' => 'زنده جان', 'en_name' => 'Zinda Jan'],
            ['name' => 'گذاره', 'en_name' => 'Gozara'],
            ['name' => 'انجیل', 'en_name' => 'Injil '],
            ['name' => 'تورغندی', 'en_name' => 'Torghundi'],
        ]);
    }
}
