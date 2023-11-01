<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class SamanganProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'سمنگان',
            'en_name' => 'Samangan',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'ایبک', 'en_name' => 'Aybak', 'is_center' => true],
            ['name' => 'دره صوف بالا', 'en_name' => 'Dara-I-Sufi Balla'],
            ['name' => 'دره صوف پایان', 'en_name' => 'Dara-I-Sufi Payan'],
            ['name' => 'فیروز نخچیر', 'en_name' => 'Feroz Nakhchir'],
            ['name' => 'حضرت سلطان', 'en_name' => 'Hazrati Sultan'],
            ['name' => 'خرم و سرباغ', 'en_name' => 'Khuram Wa Sarbagh'],
            ['name' => 'روی دو آب', 'en_name' => 'Ruyi Du Ab'],
        ]);
    }
}
