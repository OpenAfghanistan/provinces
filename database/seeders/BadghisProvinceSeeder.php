<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use Illuminate\Database\Seeder;
use ElFactory\AfghanistanProvinces\Models\Province;

class BadghisProvinceSeeder extends Seeder
{
    public function run():void
    {
        // Create province
        $province = Province::create([
          "name_en"=> "Badghis",
          "name_dr"=> "بادغیس",
        ]);

        // Create districts
        $province->districts()->createMany([
            // Add districts here...
            [
              "name_en"=>"PROVINCIAL CAPITAL OF  BADGHIS ( QALA-E-NOW )",
              "name_dr"=>"( مرکز ولایت بادغیس) قلعه نو",
            ],
            [
              "name_en"=>"AB KAMARI",
              "name_dr"=>"آبکمــری",
            ],
            [
              "name_en"=>"MUQUR",
              "name_dr"=>"مقر",
            ],
            [
              "name_en"=>"QADIS",
              "name_dr"=>"قادس",
            ],

            [
              "name_en"=>"BALA MURGHAB",
              "name_dr"=>"بالامــرغــاب",
            ],
            [
              "name_en"=>"JAWAND",
              "name_dr"=>"جونـد",
            ],
            [
              "name_en"=>"GHORMACH",
              "name_dr"=>"غـورمــاچ",
            ],
        ]);
    }
}
