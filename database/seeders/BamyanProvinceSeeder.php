<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use ElFactory\AfghanistanProvinces\Models\Province;
use Illuminate\Database\Seeder;

class BamyanProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'بامیان',
            'en_name' => 'Bamyan',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'بامیان', 'en_name' => 'Bamyan'],
            ['name' => 'شیبر', 'en_name' => 'Shebar'],
            ['name' => 'سیغان', 'en_name' => 'Saighan'],
            ['name' => 'کهمرد', 'en_name' => 'Kahmard'],
            ['name' => 'یکاولنگ', 'en_name' => 'Yakawlang'],
            ['name' => 'پنجاب', 'en_name' => 'Panjab'],
            ['name' => 'پنجاب', 'en_name' => 'Panjab'],
            ['name' => 'یکاولنگ ۲', 'en_name' => 'Yakawlang 2'],
        ]);
    }
}
