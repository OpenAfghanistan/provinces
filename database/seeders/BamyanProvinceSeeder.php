<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use Illuminate\Database\Seeder;
use ElFactory\AfghanistanProvinces\Models\Province;

class BamyanProvinceSeeder extends Seeder
{
    public function run():void
    {
        // Create province
        $province = Province::create([
            'name' => 'بامیان',
            'en_name' => 'Bamyan',
        ]);

        // Create districts
        $province->districts()->createMany([
            ["en_name"=>"PROVINCIAL CAPITAL OF  BAMYAN ( BAMYAN )","name"=>"( مرکز ولایت بامیان) بامیان"],
            ["en_name"=>"SHEBAR","name"=>"شیبر"],
            ["en_name"=>"SAIGHAN","name"=>"سیغان"],
            ["en_name"=>"KAHMARD","name"=>"کهمرد"],
            ["en_name"=>"YAKAWLANG","name"=>"یکاولنگ"],
            ["en_name"=>"PANJAB","name"=>"پنجاب"],
            ["en_name"=>"PANJAB", "name"=>"پنجاب"],
            ["en_name"=>"Yakawlang No. 2","name"=>"یکاولنگ ۲"]
        ]);
    }
}
