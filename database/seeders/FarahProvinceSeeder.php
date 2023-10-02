<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use ElFactory\AfghanistanProvinces\Models\Province;
use Illuminate\Database\Seeder;

class FarahProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'فراه',
            'en_name' => 'Farah',
        ]);

        // Create districts
        $province->districts()->createMany([
            ["en_name"=>"PROVINCIAL CAPITAL OF  FARAH ( FARAH )","name"=>"مرکز فراه"],            ["en_name"=>"PUSHTRUD","name"=>"پشت رود"],
            ["en_name"=>"KHAK-E-SAFED","name"=>"خاک سفید"],
            ["en_name"=>"QALA-E-KAH","name"=>"قلعه کاه"],
            ["en_name"=>"SHIB KOH","name"=>"شیب کوه"],
            ["en_name"=>"BALA BULUK","name"=>"بالا بلوک"],
            ["en_name"=>"ANAR DARA","name"=>"اناردره"],
            ["en_name"=>"BAKWA","name"=>"بکواه"],
            ["en_name"=>"LASH-E-JUWAYN", "name"=>"لاش جوین"],
            ["en_name"=>"GULISTAN","name"=>"گلستان"],
            ["en_name"=>"PUR CHAMAN","name"=>"پرچمن"],
        ]);
    }
}
