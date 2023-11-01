<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class NangarharProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'ننگرهار',
            'en_name' => 'Nangarhar',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'جلال آباد', 'en_name' => 'Jalalabad', 'is_center' => true],
            ['name' => 'اچین', 'en_name' => 'Achin'],
            ['name' => 'بتی کوت', 'en_name' => 'Bati Kot'],
            ['name' => 'بیهسود', 'en_name' => 'Behsud'],
            ['name' => 'چپر هار', 'en_name' => 'Chaparhar'],
            ['name' => 'دره نور', 'en_name' => 'Dara-e-Noor'],
            ['name' => 'ده بالا', 'en_name' => 'Dih Bala'],
            ['name' => 'دور بابا', 'en_name' => 'Dur Baba'],
            ['name' => 'گوشته', 'en_name' => 'Goshta'],
            ['name' => 'حصارک', 'en_name' => 'Hisarak'],
            ['name' => 'خوگیانی', 'en_name' => 'Khogyani'],
            ['name' => 'لال پور', 'en_name' => 'Lal Pur'],
            ['name' => 'موهمند دره', 'en_name' => 'Muhmand Dara'],
            ['name' => 'نازیان', 'en_name' => 'Nazyan'],
            ['name' => 'پچیر وآگام', 'en_name' => 'Pachir Wa Agam'],
            ['name' => 'رودات', 'en_name' => 'Rodat'],
            ['name' => 'شیرزاد', 'en_name' => 'Sherzad'],
            ['name' => 'شینوار', 'en_name' => 'Shinwar'],
            ['name' => 'سرخ رود', 'en_name' => 'Surkh Rod'],
            ['name' => 'خیوه', 'en_name' => 'Kuz Kunar (Khewa)'],
            ['name' => 'کما', 'en_name' => 'Kama'],
        ]);
    }
}
