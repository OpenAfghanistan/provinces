<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use ElFactory\AfghanistanProvinces\Models\Province;
use Illuminate\Database\Seeder;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            ['name' => 'کابل', 'en_name' => 'Kabul'],
            ['name' => 'هرات', 'en_name' => 'Heart'],
            ['name' => 'بلخ', 'en_name' => 'Balkh'],
            ['name' => 'غزني', 'en_name' => 'Ghazni'],
            ['name' => 'فراه', 'en_name' => 'Farah'],
            ['name' => 'بغلان', 'en_name' => 'Baghlan'],
            ['name' => 'جوزجان', 'en_name' => 'Jawzjan'],
            ['name' => 'غور', 'en_name' => 'Consider'],
            ['name' => 'ميدان وردگ', 'en_name' => 'Maidan Wardak'],
            ['name' => 'بادغيس', 'en_name' => 'Badghis'],
            ['name' => 'ننگرهار', 'en_name' => 'Nangarhar'],
            ['name' => 'دايکندی', 'en_name' => 'Daikundi'],
            ['name' => 'هلمند', 'en_name' => 'Helmand'],
            ['name' => 'ارزگان', 'en_name' => 'Uruzgan'],
            ['name' => 'سرپل', 'en_name' => 'Sar -e Pol'],
            ['name' => 'لغمان', 'en_name' => 'Laghman'],
            ['name' => 'تخار', 'en_name' => 'Takhar'],
            ['name' => 'لوگر', 'en_name' => 'Logger'],
            ['name' => 'فارياب', 'en_name' => 'Faryab'],
            ['name' => 'پروان', 'en_name' => 'Pro Procent'],
            ['name' => 'کندز', 'en_name' => 'Kunduz'],
            ['name' => 'کندهار', 'en_name' => 'Kandahar'],
            ['name' => 'بدخشان', 'en_name' => 'Badakhshan'],
            ['name' => 'سمنگان', 'en_name' => 'Samangan'],
            ['name' => 'کاپيسا', 'en_name' => 'Kapisa'],
            ['name' => 'پکتيا', 'en_name' => 'Paktia'],
            ['name' => 'خوست', 'en_name' => 'Khost'],
            ['name' => 'نيمروز', 'en_name' => 'Nimroz'],
            ['name' => 'کنر', 'en_name' => 'Kunar'],
            ['name' => 'زابل', 'en_name' => 'Zabul'],
            ['name' => 'پکتيکا', 'en_name' => 'Paktika'],
            ['name' => 'پنجشير', 'en_name' => 'Panjshir'],
            ['name' => 'نورستان', 'en_name' => 'Nuristan'],
            ['name' => 'بامیان', 'en_name' => 'Bamyan'],
        ];

        collect($provinces)->each(fn($province) => Province::create($province));
    }
}
