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
            'name' => 'بادغيس',
            'en_name' => 'Badghis',
        ]);

        // Create districts
        $province->districts()->createMany([
            [
              "name"=>"قلعه نو",
              "en_name"=>"Qala-e-now",
            ],
            [
              "name"=>"آبکمری",
              "en_name"=>"Ab Kamari",
            ],
            [
              "name"=>"مقر",
              "en_name"=>"Muqur",
            ],
            [
              "name"=>"قادس",
              "en_name"=>"Qadis",
            ],

            [
              "en_name"=>"Bala Murghab",
              "name"=>"بالامرغاب",
            ],
            [
              "name_en"=>"Jawand",
              "name"=>"جوند",
            ],
            [
              "name_en"=>"Ghormach",
              "name"=>"غورماچ",
            ],
        ]);
    }
}
