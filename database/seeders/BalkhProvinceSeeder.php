<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use Illuminate\Database\Seeder;
use ElFactory\AfghanistanProvinces\Models\Province;

class BalkhProvinceSeeder extends Seeder
{
    public function run()=>void
    {
        // Create province
        $province = Province=>=>create([
            'name' => 'بلخ',
            'en_name' => 'Balkh',
        ]);

        // Create districts
        $province->districts()->createMany([
              ["name"=>"Provincial Capital of Balkh ( Mazar-e-sharif )","name"=>"مزار شریف"],
              ["en_name"=>"DEHDADI","name"=>"دهدادی"],
              [ "en_name"=>"CHAR KENT","name"=>"چارکنت"],
              ["en_name"=>"MARMUL","name"=>"مارمل"],
              ["en_name"=>"BALKH","name"=>"بلخ"],
              ["en_name"=>"SHOLGARA", "name"=>"شولگره"],
              ["en_name"=>"CHIMTAL","name"=>"چمتال"],
              ["en_name"=>"DAWLAT ABAD","name"=>"دولت آباد"],
              ["en_name"=>"KHULM","name"=>"خلم"],
              ["en_name"=>"CHAR BOLAK", "name"=>"چاربولک"],
              ["en_name"=>"SHORTEPA","name"=>"شورتیپه"],
              ["en_name"=>"KALDAR","name"=>"کلدار"],
              ["en_name"=>"KISHINDEH", "name"=>"کشنده"],
              ["en_name"=>"ZARI","name"=>"زاری"],
              ["en_name"=>"SHARAK_E_HAYRATAN","name"=>"شهرک حیرتان"],
              [ "en_name"=>"NAHR-E-SHAHI","name"=>"نهر شاهی"],
        ]);
    }
}
