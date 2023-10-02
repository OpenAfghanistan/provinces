<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use Illuminate\Database\Seeder;
use ElFactory\AfghanistanProvinces\Models\Province;

class FaryabProvinceSeeder extends Seeder
{
    public function run():void
    {
        // Create province
        $province = Province::create([
            'name' => 'فارياب',
            'en_name' => 'Faryab',
        ]);

        // Create districts
        $province->districts()->createMany([
            ["en_name" => "PROVINCIAL CAPITAL OF FARYAB ( MAYMANA )","name" => "میمنه"],
            ["en_name" => "KHWAJA SABZ POSH-E-WALI","name" => "خواجه سبز پوش ولی"],
            ["en_name" => "ALMAR","name" => "المار"],
            ["en_name" => "BIL CHIRAGH","name" => "بل چراغ"],
            ["en_name" => "SHIRIN TAGAB","name" => "شرین تگاب"],
            ["en_name" => "QAISAR", "name" => "قیصار"],
            ["en_name" => "GURZIWAN","name" => "گرزیوان"],
            ["en_name" => "DAWLAT ABAD","name" => "دولت آباد"],
            ["en_name" => "KOHISTAN","name" => "کوهستان"],
            ["en_name" => "QARAM QOLE","name" => "قرمقول"],
            ["en_name" => "QURGHAN", "name" => "قرغان"],
            ["en_name" => "ANDKHOY","name" => "اندخوی"],
            ["en_name" => "KHAN CHARBAGH","name" => "خان چارباغ"],
            ["en_name" => "PASHTUN KOT","name" => "پشتون کوت"]
        ]);
    }
}
