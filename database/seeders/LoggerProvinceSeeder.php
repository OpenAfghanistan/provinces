<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class LoggerProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'لوگر',
            'en_name' => 'Loger',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'پل علم', 'en_name' => 'Pul-i-Alam', 'is_center' => true],
            ['name' => 'ازره', 'en_name' => 'Azra'],
            ['name' => 'برکی برک', 'en_name' => 'Baraki Barak'],
            ['name' => 'چرخ', 'en_name' => 'Charkh'],
            ['name' => 'خروار', 'en_name' => 'Kharwar'],
            ['name' => 'خوشی', 'en_name' => 'Khoshi'],
            ['name' => 'محمدآغه', 'en_name' => 'Mohammad Agha'],
        ]);
    }
}
