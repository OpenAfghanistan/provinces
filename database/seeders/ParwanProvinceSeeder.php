<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class ParwanProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'پروان',
            'en_name' => 'Parwan',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'چاریکار', 'en_name' => 'Charikar', 'is_center' => true],
            ['name' => 'بگرام', 'en_name' => 'Bagram'],
            ['name' => 'غوربند', 'en_name' => 'Ghorband'],
            ['name' => 'جبل سراج', 'en_name' => 'Jabal Saraj'],
            ['name' => 'کوه صافي', 'en_name' => 'Kohi Safi'],
            ['name' => 'سالنگ', 'en_name' => 'Salang'],
            ['name' => 'سید خیل', 'en_name' => 'Sayed Khel'],
            ['name' => 'شیخ علی', 'en_name' => 'Shekh Ali'],
            ['name' => 'شینواري', 'en_name' => 'Shinwari'],
            ['name' => 'سرخ پارسا', 'en_name' => 'Surkhi Parsa'],
        ]);
    }
}
