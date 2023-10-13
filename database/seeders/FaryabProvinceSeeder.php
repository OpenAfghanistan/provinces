<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use ElFactory\AfghanistanProvinces\Models\Province;
use Illuminate\Database\Seeder;

class FaryabProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'فارياب',
            'en_name' => 'Faryab',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['en_name' => 'Maymana', 'name' => 'میمنه', 'is_center' => true],
            ['en_name' => 'Khwaja Sabz Posh-e Wali', 'name' => 'خواجه سبز پوش ولی'],
            ['en_name' => 'Almar', 'name' => 'المار'],
            ['en_name' => 'Bil Chiragh', 'name' => 'بل چراغ'],
            ['en_name' => 'Shirin Tagab', 'name' => 'شرین تگاب'],
            ['en_name' => 'Qaisar', 'name' => 'قیصار'],
            ['en_name' => 'Gurziwan', 'name' => 'گرزیوان'],
            ['en_name' => 'Dawlat Abad', 'name' => 'دولت آباد'],
            ['en_name' => 'Kohistan', 'name' => 'کوهستان'],
            ['en_name' => 'Qaram Qole', 'name' => 'قرمقول'],
            ['en_name' => 'Qurghan', 'name' => 'قرغان'],
            ['en_name' => 'Andkhoy', 'name' => 'اندخوی'],
            ['en_name' => 'Khan Charbagh', 'name' => 'خان چارباغ'],
            ['en_name' => 'Pashtun Kot', 'name' => 'پشتون کوت'],
        ]);
    }
}
