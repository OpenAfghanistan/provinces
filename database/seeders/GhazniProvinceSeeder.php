<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use OpenAfghanistan\Provinces\Models\Province;
use Illuminate\Database\Seeder;

class GhazniProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'غزني',
            'en_name' => 'Ghazni',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'غزنی', 'en_name' => 'Ghazni', 'is_center' => true],
            ['name' => 'ولی محمد شهید خوگیانی', 'en_name' => 'Wali Mohammad Shahid Khugyani'],
            ['name' => 'خواجه عمری', 'en_name' => 'Khwaja Omari'],
            ['name' => 'واغظ', 'en_name' => 'Waghaz'],
            ['name' => 'ده یک', 'en_name' => 'Deh Yak'],
            ['name' => 'جغتو', 'en_name' => 'Jaghatu'],
            ['name' => 'اندر', 'en_name' => 'Andar'],
            ['name' => 'زنخان', 'en_name' => 'Zanakhan'],
            ['name' => 'رشیدان', 'en_name' => 'Rashidan'],
            ['name' => 'ناهور', 'en_name' => 'Nawur'],
            ['name' => 'قره باغ', 'en_name' => 'Qara Bagh'],
            ['name' => 'گیرو', 'en_name' => 'Giro'],
            ['name' => 'آب بند', 'en_name' => 'Ab Band'],
            ['name' => 'جاغوری', 'en_name' => 'Jaghuri'],
            ['name' => 'مقر', 'en_name' => 'Muqur'],
            ['name' => 'مالستان', 'en_name' => 'Malistan'],
            ['name' => 'گیلان', 'en_name' => 'Gelan'],
            ['name' => 'اجرستان', 'en_name' => 'Ajristan'],
            ['name' => 'ناوه', 'en_name' => 'Nawa'],
        ]);
    }
}
