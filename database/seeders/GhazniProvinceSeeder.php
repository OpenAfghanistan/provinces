<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use ElFactory\AfghanistanProvinces\Models\Province;
use Illuminate\Database\Seeder;

class GhazniProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'غزني',
            'en_name' => 'Ghazni',
        ]);

        // Create districts
        $province->districts()->createMany([
            ["en_name"=>"PROVINCIAL CAPITAL OF  GHAZNI ( GHAZNI )","name"=>"(مرکز ولایت غزنی) غزنی"],
            ["en_name"=>"WALI MOHAMMAD SHAHID KHUGYANI","name"=>"ولی محمد شهید خوگیانی"],
            ["en_name"=>"KHWAJA OMARI","name"=>"خواجه عمری"],
            ["en_name"=>"WAGHAZ","name"=>"واغظ"],
            ["en_name"=>"DEH YAK","name"=>"ده یک"],
            ["en_name"=>"JAGHATU","name"=>"جغتو"],
            ["en_name"=>"ANDAR","name"=>"اندر"],
            ["en_name"=>"ZANAKHAN", "name"=>"زنخان"],
            ["en_name"=>"RASHIDAN","name"=>"رشیدان"],
            ["en_name"=>"NAWUR","name"=>"ناهور"],
            ["en_name"=>"QARA BAGH","name"=>"قره باغ"],
            ["en_name"=>"GIRO","name"=>"گیرو"],
            ["en_name"=>"AB BAND","name"=>"آب بند"],
            ["en_name"=>"JAGHURI","name"=>"جاغوری"],
            ["en_name"=>"MUQUR","name"=>"مقر"],
            ["en_name"=>"MALISTAN","name"=>"مالستان"],
            ["en_name"=>"GELAN","name"=>"گیلان"],
            ["en_name"=>"AJRISTAN","name"=>"اجرستان"],
            ["en_name"=>"NAWA","name"=>"ناوه"]
        ]);
    }
}
