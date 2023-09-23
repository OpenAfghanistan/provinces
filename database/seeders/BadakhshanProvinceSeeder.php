<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use Illuminate\Database\Seeder;
use ElFactory\AfghanistanProvinces\Models\Province;

class BadakhshanProvinceSeeder extends Seeder
{
    public function run():void
    {
        // Create province
        $province = Province::create([
            'name' => 'بدخشان',
            'en_name' => 'Badakhshan',
        ]);

        // Create districts
        $province->districts()->createMany([
            [ 'name' => "( مرکز ولایت بدخشان) فیض آباد", "en_name' => "( مرکز ولایت بدخشان) فیض آباد" ],
            [ 'en_name' => "ARGO", 'name' => "ارگو" ],
            [ 'en_name' => "ARGHANJ KHWAH", 'name' => "ارغنجخواه" ],
            [ 'en_name' => "ARGHANJ KHWAH", 'name' => "ارغنجخواه" ],
            [ 'en_name' => "YAFTAL-E-SOFLA", 'name' => "یفتل سفلی" ],
            [ 'en_name' => "KHASH", 'name' => "خاش" ],
            [ 'en_name' => "BAHARAK", 'name' => "بهارک" ],
            [ 'en_name' => "DARAYIM", 'name' => "درایم" ],
            [ 'en_name' => "DARAYIM", 'name' => "درایم" ],
            [ 'en_name' => "KOHISTAN", 'name' => "کوهستان" ],
            [ 'en_name' => "YAWAN", 'name' => "یاوان" ],
            [ 'en_name' => "JURM", 'name' => "جرم" ],
            [ 'en_name' => "TASHKAN", 'name' => "تشکان" ],
            [ 'en_name' => "SHUHADA", 'name' => "شهدا" ],
            [ 'en_name' => "SHAHR-E-BUZURG", 'name' => "شهربزرگ" ],
            [ 'en_name' => "RAGHISTAN", 'name' => "راغستان" ],
            [ 'en_name' => "KISHM", 'name' => "کشم" ],
            [ 'en_name' => "WARDOOJ", 'name' => "وردوج" ],
            [ 'en_name' => "TAGAB", 'name' => "تگاب" ],
            [ 'en_name' => "YAMGAN", 'name' => "یمگان" ],
            [ 'en_name' => "SHIGHNAN", 'name' => "شغنان" ],
            [ 'en_name' => "KHWAHAN", 'name' => "خواهان" ],
            [ 'en_name' => "KUFAB", 'name' => "کوف آب" ],
            [ 'en_name' => "DARWAZ-E-PAYIN (MAIMAY)", 'name' => "درواز پائین مایمی" ],
            [ 'en_name' => "ESHKASHIM", 'name' => "اشکاشم" ],
            [ 'en_name' => "SHIKI", 'name' => "شکی" ],
            [ 'en_name' => "ZEBAK", 'name' => "زیباک" ],
            [ 'en_name' => "KIRAN WA MENJAN", 'name' => "کران ومنجان" ],
            [ 'en_name' => "DARWAZ-E-BALA (NESAY)", 'name' => "درواز بالا نسی" ],
            [ 'en_name' => "WAKHAN", 'name' => "واخان" ]
        ]);
    }
}
