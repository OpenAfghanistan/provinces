<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use ElFactory\AfghanistanProvinces\Models\Province;
use Illuminate\Database\Seeder;

class DaikundiProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'دايکندی',
            'en_name' => 'Daikundi',
        ]);

        // Create districts
        $province->districts()->createMany([
            ["en_name"=>"PROVINCIAL CAPITAL OF DAYKUNDI ( NILI )","name"=>"(مرکز ولایت دایکندی) نیلی"],
            ["en_name"=>"SHAHRISTAN", "name"=>"شهرستان"],
            ["en_name"=>"PATOO","name"=>"پاتو"],
            ["en_name"=>"ISHTERLAI","name"=>"اشترلی"],
            ["en_name"=>"KHEDIR","name"=>"خدیر"],
            ["en_name"=>"GETI","name"=>"گیتی"],
            ["en_name"=>"MIRAMOR","name"=>"میرامور"],
            ["en_name"=>"SANG-E-TAKHT","name"=>"سنگ تخت"],
            ["en_name"=>"KEJRAN","name"=>"کیجران"],
        ]);
    }
}
