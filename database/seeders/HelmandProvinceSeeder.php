<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class HelmandProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'هلمند',
            'en_name' => 'Helmand',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'لشکرگاه', 'en_name' => 'Lashkargah', 'is_center' => true],
            ['name' => 'باغران', 'en_name' => 'Baghran'],
            ['name' => 'دیشو', 'en_name' => 'Dishu'],
            ['name' => 'گرمسیر', 'en_name' => 'Garmsir'],
            ['name' => 'گریشک', 'en_name' => 'Gerishk'],
            ['name' => 'کجکی', 'en_name' => 'Kajaki'],
            ['name' => 'خانیشین', 'en_name' => 'Khanashin'],
            ['name' => 'موسی قلعه', 'en_name' => 'Musa Qala'],
            ['name' => 'نادعلی', 'en_name' => 'Nad Ali'],
            ['name' => 'ناوه بارکزای', 'en_name' => 'Nawa-I-Barakzayi'],
            ['name' => 'نوزاد', 'en_name' => 'Nawzad'],
            ['name' => 'سنگین', 'en_name' => 'Sangin'],
            ['name' => 'واشیر', 'en_name' => 'Washir'],
            ['name' => 'شورآبک', 'en_name' => 'Shurabak'],
        ]);
    }
}
