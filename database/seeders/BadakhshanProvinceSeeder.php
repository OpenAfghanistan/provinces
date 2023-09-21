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
            "name_en"=> "Badakhshan",
            "name_dr"=> "بدخشان",
        ]);

        // Create districts
        $province->districts()->createMany([
            [
              "name_dr"=>"( مرکز ولایت بدخشان) فیض آباد",
              "name_pa"=>"( مرکز ولایت بدخشان) فیض آباد",
            ],
            [
              "name_en"=>"ARGO",
              "name_dr"=>"ارگو",
            ],
            [
              "name_en"=>"ARGHANJ KHWAH",
              "name_dr"=>"ارغنجخواه",
            ],
            [
              "name_en"=>"ARGHANJ KHWAH",
              "name_dr"=>"ارغنجخواه",
            ],
            [
              "name_en"=>"YAFTAL-E-SOFLA",
              "name_dr"=>"یفتل سفلی",
            ],
            [
              "name_en"=>"KHASH",
              "name_dr"=>"خاش",
            ],
            [
              "name_en"=>"BAHARAK",
              "name_dr"=>"بهارک",
            ],
            [
              "name_en"=>"DARAYIM",
              "name_dr"=>"درایم",
            ],
            [
              "name_en"=>"DARAYIM",
              "name_dr"=>"درایم",
            ],
            [
              "name_en"=>"KOHISTAN",
              "name_dr"=>"کوهستان",
            ],
            [
              "name_en"=>"YAWAN",
              "name_dr"=>"یاوان",
            ],
            [
              "name_en"=>"JURM",
              "name_dr"=>"جرم",
            ],
            [
              "name_en"=>"TASHKAN",
              "name_dr"=>"تشکان",
            ],
            [
              "name_en"=>"SHUHADA",
              "name_dr"=>"شهدا",
            ],
            [
              "name_en"=>"SHAHR-E-BUZURG",
              "name_dr"=>"شهربزرگ",
            ],
            [
              "name_en"=>"RAGHISTAN",
              "name_dr"=>"راغستان",
            ],
            [
              "name_en"=>"KISHM",
              "name_dr"=>"کشم",
            ],
            [
              "name_en"=>"WARDOOJ",
              "name_dr"=>"وردوج",
            ],
            [
              "name_en"=>"TAGAB",
              "name_dr"=>"تگاب",
            ],
            [
              "name_en"=>"YAMGAN",
              "name_dr"=>"یمگان",
            ],
            [
              "name_en"=>"SHIGHNAN",
              "name_dr"=>"شغنان",
            ],
            [
              "name_en"=>"KHWAHAN",
              "name_dr"=>"خواهان",
            ],
            [
              "name_en"=>"KUFAB",
              "name_dr"=>"کوف آب",
            ],
            [
              "name_en"=>"DARWAZ-E-PAYIN (MAIMAY)",
              "name_dr"=>"درواز پائین مایمی",
            ],
            [
              "name_en"=>"ESHKASHIM",
              "name_dr"=>"اشکاشم",
            ],
            [
              "name_en"=>"SHIKI",
              "name_dr"=>"شکی",
            ],
            [
              "name_en"=>"ZEBAK",
              "name_dr"=>"زیباک",
            ],
            [
              "name_en"=>"KIRAN WA MENJAN",
              "name_dr"=>"کران ومنجان",
            ],
            [
              "name_en"=>"DARWAZ-E-BALA (NESAY)",
              "name_dr"=>"درواز بالا نسی",
            ],
            [
              "name_en"=>"WAKHAN",
              "name_dr"=>"واخان",
            ]
        ]);
    }
}
