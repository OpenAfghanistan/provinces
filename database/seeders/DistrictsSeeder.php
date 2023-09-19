<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use ElFactory\AfghanistanProvinces\Models\Province;
use Illuminate\Database\Seeder;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kabul
        Province::find(1)->districts()->createMany([
            ['name' => 'بگرامی', 'en_name' => 'Bagrami'],
            ['name' => 'چهار آسیاب', 'en_name' => 'Chahar Asyab'],
            ['name' => 'ده سبز', 'en_name' => 'Deh Sabz'],
            ['name' => 'فرزه', 'en_name' => 'Farza'],
            ['name' => 'گل دره', 'en_name' => 'Guldara'],
            ['name' => 'استالف', 'en_name' => 'Istalif'],
            ['name' => 'شهر کابل', 'en_name' => 'Kabul (city)'],
            ['name' => 'کلکان', 'en_name' => 'Kalakan'],
            ['name' => 'خاک جبار', 'en_name' => 'Khaki Jabbar'],
            ['name' => 'میر بچه کوت', 'en_name' => 'Mir Bacha Kot'],
            ['name' => 'موسهیی', 'en_name' => 'Mussahi'],
            ['name' => 'پغمان', 'en_name' => 'Paghman'],
            ['name' => 'قره باغ', 'en_name' => 'Qarabagh'],
            ['name' => 'شکردره', 'en_name' => 'Shakardara'],
            ['name' => 'سروبی', 'en_name' => 'Surobi'],
        ]);

        // TODO: add other provinces
    }
}
