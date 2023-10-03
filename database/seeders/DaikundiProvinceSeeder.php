<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use OpenAfghanistan\Provinces\Models\Province;
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
            ['name' => 'نیلی', 'en_name' => 'Nili'],
            ['name' => 'شهرستان', 'en_name' => 'Shahristan'],
            ['name' => 'پاتو', 'en_name' => 'Patoo'],
            ['name' => 'اشترلی', 'en_name' => 'Ishterlai'],
            ['name' => 'خدیر', 'en_name' => 'Khedir'],
            ['name' => 'گیتی', 'en_name' => 'Geti'],
            ['name' => 'میرامور', 'en_name' => 'Miramor'],
            ['name' => 'سنگ تخت', 'en_name' => 'Sang-e-takht'],
            ['name' => 'کیجران', 'en_name' => 'Kejran'],
        ]);
    }
}
