<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class KapisaProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'کاپيسا',
            'en_name' => 'Kapisa',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'محمود راقی', 'en_name' => 'Mahmud Raqi', 'is_center' => true],
            ['name' => 'آلاسای', 'en_name' => 'Alasay'],
            ['name' => 'حصه اول کوهستان', 'en_name' => 'Hesa Awal Kohistan'],
            ['name' => 'حصه دوم کوهستان', 'en_name' => 'Hesa Duwum Kohistan'],
            ['name' => 'کوه بند', 'en_name' => 'Koh Band'],
            ['name' => 'نجراب', 'en_name' => 'Nijrab'],
            ['name' => 'تگاب', 'en_name' => 'Tagab'],
            ['name' => 'کوهستان', 'en_name' => 'Kuhistan'],
            ['name' => 'موجود نیست', 'en_name' => 'N/A'],
            ['name' => 'مرکز کاپیسا', 'en_name' => 'Center of Kapisa'],
            ['name' => 'کوهستان-1', 'en_name' => 'Kohistan-1'],
            ['name' => 'کوهستان-2', 'en_name' => 'Kohistan-2'],
            ['name' => 'نجراب', 'en_name' => 'Nijrab.'],
            ['name' => '', 'en_name' => 'Hasa Awal Kohistan'],
            ['name' => 'حصه اول', 'en_name' => 'Hesa Awal'],
            ['name' => 'حصه دوم', 'en_name' => 'Hesa Dowm'],
        ]);
    }
}
