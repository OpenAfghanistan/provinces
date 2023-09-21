<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use Illuminate\Database\Seeder;
use ElFactory\AfghanistanProvinces\Models\Province;

class KabulProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            "name_en"=> "Kabul",
            "name_dr"=> "کابل",
        ]);

        // Create districts
        $province->districts()->createMany([
            [
              "name_en"=>"Provincial Capital of Kabul (Kabul)",
              "name_dr"=>"شهر کابل",
            ],
            [
              "name_en"=>"BAGRAMI",
              "name_dr"=>"بگرامی",
            ],
            [
              "name_en"=>"DEHSABZ",
              "name_dr"=>"ده سبز",
            ],
            [
              "name_en"=>"SHAKAR DARA",
              "name_dr"=>"شکردره",
            ],
            [
              "name_en"=>"MUSAHI",
              "name_dr"=>"موسئی",
            ],
            [
              "name_en"=>"MIR BACHA KOT",
              "name_dr"=>"میر بچه کوت",
            ],
            [
              "name_en"=>"KHAK-E-JABAR",
              "name_dr"=>"خاک جبار",
            ],
            [
              "name_en"=>"KALAKAN",
              "name_dr"=>"کلکان",
            ],
            [
              "name_en"=>"GULDARA",
              "name_dr"=>"گلدره",
            ],
            [
              "name_en"=>"FARZA",
              "name_dr"=>"فرزه",
            ],
            [
              "name_en"=>"ESTALEF",
              "name_dr"=>"استالف",
            ],
            [
              "name_en"=>"QARA BAGH",
              "name_dr"=>"قره باغ",
            ],
            [
              "name_en"=>"SURUBI",
              "name_dr"=>"سروبی",
            ],
            [
              "name_en"=>"Paghman",
              "name_dr"=>"پغمان",
            ],
            [
              "name_en"=>"CHAHAR ASYAB",
              "name_dr"=>"چهارآسیاب",
            ],
        ]);
    }
}
