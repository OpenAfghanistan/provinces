<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class KandaharProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'کندهار',
            'en_name' => 'Kandahar',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'کندهار', 'en_name' => 'Kandahar City', 'is_center' => true],
            ['name' => 'ارغنداب', 'en_name' => 'Arghandab'],
            ['name' => 'ارغستان', 'en_name' => 'Arghistan'],
            ['name' => 'دامان', 'en_name' => 'Daman'],
            ['name' => 'غورک', 'en_name' => 'Ghorak'],
            ['name' => 'خاکریز', 'en_name' => 'Khakrez'],
            ['name' => 'معروف', 'en_name' => 'Maruf'],
            ['name' => 'میوند', 'en_name' => 'Maywand'],
            ['name' => 'میانشین', 'en_name' => 'Miyan Nasheen'],
            ['name' => 'نیش', 'en_name' => 'Naish'],
            ['name' => 'پنجوایی', 'en_name' => 'Panjwaye'],
            ['name' => 'ریگ', 'en_name' => 'Reg'],
            ['name' => 'شاه ولی کوت', 'en_name' => 'Shah Wali Kot'],
            ['name' => 'شورابک', 'en_name' => 'Shorabak'],
            ['name' => 'سپین بولدک', 'en_name' => 'Spin Boldak'],
            ['name' => 'ژیری', 'en_name' => 'Zharai'],
            ['name' => 'دند', 'en_name' => 'Dand'],
        ]);
    }
}
