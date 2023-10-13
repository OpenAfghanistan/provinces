<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use ElFactory\AfghanistanProvinces\Models\Province;
use Illuminate\Database\Seeder;

class BalkhProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'بلخ',
            'en_name' => 'Balkh',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'مزار شریف', 'en_name' => 'Mazar-e Sharif', 'is_center' => true],
            ['name' => 'دهدادی', 'en_name' => 'Dehdadi'],
            ['name' => 'چارکنت', 'en_name' => 'Char kent'],
            ['name' => 'مارمل', 'en_name' => 'Marmul'],
            ['name' => 'بلخ', 'en_name' => 'Balkh'],
            ['name' => 'شولگره', 'en_name' => 'Sholgara'],
            ['name' => 'چمتال', 'en_name' => 'Chimtal'],
            ['name' => 'دولت آباد', 'en_name' => 'Dawlat Abad'],
            ['name' => 'خلم', 'en_name' => 'Khulm'],
            ['name' => 'چاربولک', 'en_name' => 'Char Bolak'],
            ['name' => 'شورتیپه', 'en_name' => 'Shortepa'],
            ['name' => 'کلدار', 'en_name' => 'Kaldar'],
            ['name' => 'کشنده', 'en_name' => 'Kishindeh'],
            ['name' => 'زاری', 'en_name' => 'Zari'],
            ['name' => 'شهرک حیرتان', 'en_name' => 'Sharak-e Hayratan'],
            ['name' => 'نهر شاهی', 'en_name' => 'Nahr-e Shahi'],
        ]);
    }
}
