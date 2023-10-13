<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use OpenAfghanistan\Provinces\Models\Province;
use Illuminate\Database\Seeder;

class KabulProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'کابل',
            'en_name' => 'Kabul',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'کابل', 'en_name' => 'Kabul', 'is_center' => true],
            ['name' => 'بگرامی', 'en_name' => 'Bagrami'],
            ['name' => 'چهار آسیاب', 'en_name' => 'Chahar Asyab'],
            ['name' => 'ده سبز', 'en_name' => 'Deh Sabz'],
            ['name' => 'فرزه', 'en_name' => 'Farza'],
            ['name' => 'گل دره', 'en_name' => 'Guldara'],
            ['name' => 'استالف', 'en_name' => 'Istalif'],
            ['name' => 'کلکان', 'en_name' => 'Kalakan'],
            ['name' => 'خاک جبار', 'en_name' => 'Khaki-e-Jabbar'],
            ['name' => 'میر بچه کوت', 'en_name' => 'Mir Bacha Kot'],
            ['name' => 'موسهیی', 'en_name' => 'Mussahi'],
            ['name' => 'پغمان', 'en_name' => 'Paghman'],
            ['name' => 'قره باغ', 'en_name' => 'Qarabagh'],
            ['name' => 'شکردره', 'en_name' => 'Shakardara'],
            ['name' => 'سروبی', 'en_name' => 'Surobi'],
        ]);
    }
}
