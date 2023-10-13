<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use OpenAfghanistan\Provinces\Models\Province;
use Illuminate\Database\Seeder;

class BadakhshanProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'بدخشان',
            'en_name' => 'Badakhshan',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'فیض آباد', 'en_name' => 'Fayzabad', 'is_center' => true],
            ['name' => 'ارگو', 'en_name' => 'Argo'],
            ['name' => 'ارغنجخواه', 'en_name' => 'Arghanj Khwah'],
            ['name' => 'یفتل سفلی', 'en_name' => 'Yaftal-e-Sofla'],
            ['name' => 'خاش', 'en_name' => 'Khash'],
            ['name' => 'بهارک', 'en_name' => 'Baharak'],
            ['name' => 'درایم', 'en_name' => 'Darayim'],
            ['name' => 'کوهستان', 'en_name' => 'Kohistan'],
            ['name' => 'یاوان', 'en_name' => 'Yawan'],
            ['name' => 'جرم', 'en_name' => 'Jurm'],
            ['name' => 'تشکان', 'en_name' => 'Tashkan'],
            ['name' => 'شهدا', 'en_name' => 'Shuhada'],
            ['name' => 'شهربزرگ', 'en_name' => 'Shahr-e-Buzurg'],
            ['name' => 'راغستان', 'en_name' => 'Raghistan'],
            ['name' => 'کشم', 'en_name' => 'Kishm'],
            ['name' => 'وردوج', 'en_name' => 'Wardooj'],
            ['name' => 'تگاب', 'en_name' => 'Tagab'],
            ['name' => 'یمگان', 'en_name' => 'Yamgan'],
            ['name' => 'شغنان', 'en_name' => 'Shighnan'],
            ['name' => 'خواهان', 'en_name' => 'Khwaan'],
            ['name' => 'کوف آب', 'en_name' => 'Kufab'],
            ['name' => 'درواز پائین مایمی', 'en_name' => 'Darwaz-e-Payin (Maimay)'],
            ['name' => 'اشکاشم', 'en_name' => 'Eshkashim'],
            ['name' => 'شکی', 'en_name' => 'Shiki'],
            ['name' => 'زیباک', 'en_name' => 'Zebak'],
            ['name' => 'کران ومنجان', 'en_name' => 'Kiran wa Menjan'],
            ['name' => 'درواز بالا نسی', 'en_name' => 'Darwaz-e-Bala (Nesay)'],
            ['name' => 'واخان', 'en_name' => 'Wakhan'],
        ]);
    }
}
