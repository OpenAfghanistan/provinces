<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class KhostProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'خوست',
            'en_name' => 'Khost',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'خوست متون', 'en_name' => 'Khost (Matoon)', 'is_center' => true],
            ['name' => 'باک', 'en_name' => 'Baak'],
            ['name' => 'گوربز', 'en_name' => 'Gurbuz'],
            ['name' => 'جاجی میدان', 'en_name' => 'Jaji Maidan'],
            ['name' => 'مندوزی', 'en_name' => 'Mandozai'],
            ['name' => 'موسی خیل', 'en_name' => 'Musa Khel'],
            ['name' => 'نادرشاه کوت', 'en_name' => 'Nadir Shah Kot'],
            ['name' => 'قلندر', 'en_name' => 'Qalandar'],
            ['name' => 'سبری', 'en_name' => 'Sabari'],
            ['name' => 'شمال', 'en_name' => 'Shamal'],
            ['name' => 'سپیره', 'en_name' => 'Spera'],
            ['name' => 'تنی', 'en_name' => 'Tani'],
            ['name' => 'تیره زی', 'en_name' => 'Tirzayi ( Ali Sher )'],
        ]);
    }
}
