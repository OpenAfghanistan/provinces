<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class TakharProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'تخار',
            'en_name' => 'Takhar',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'بهارک', 'en_name' => 'Baharak'],
            ['name' => 'بنگي', 'en_name' => 'Bangi'],
            ['name' => 'چاه آب', 'en_name' => 'Chah Ab'],
            ['name' => 'چال', 'en_name' => 'Chal ahib'],
            ['name' => 'درقد', 'en_name' => 'Darqad bad'],
            ['name' => 'دشت قلعه', 'en_name' => 'Dashti Qala'],
            ['name' => 'فرخار', 'en_name' => 'Farkhar I-Zal'],
            ['name' => 'هزار سموچ', 'en_name' => 'Hazar Sumuch'],
            ['name' => 'اشکامش', 'en_name' => 'Ishkamish'],
            ['name' => 'کلفگان', 'en_name' => 'Kalafgan'],
            ['name' => 'خواجه بهاوالدین', 'en_name' => 'Khwaja Baha'],
            ['name' => 'خواجه غار', 'en_name' => 'Khwaja Ghar'],
            ['name' => 'نمک آب', 'en_name' => 'Namak Ab'],
            ['name' => 'روستاق', 'en_name' => 'Rustaq'],
            ['name' => 'تالقان', 'en_name' => 'Taluqan'],
            ['name' => 'ورسج', 'en_name' => 'Warsaj'],
            ['name' => 'ینگی قلعه', 'en_name' => 'Yangi Qala'],
        ]);
    }
}
