<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class BaghlanProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'بغلان',
            'en_name' => 'Baghlan',
        ]);

        // Create districts
        $province->districts()->createMany([
            ['name' => 'پلخمري', 'en_name' => 'Puli Khumri', 'is_center' => true],
            ['name' => 'اندراب', 'en_name' => 'Andarab'],
            ['name' => 'بغلان', 'en_name' => 'Baghlan'],
            ['name' => 'بغلان جدید', 'en_name' => 'Baghlani Jadid'],
            ['name' => 'برکه', 'en_name' => 'Burka'],
            ['name' => 'دهنه غوري', 'en_name' => 'Dahana i Ghuri'],
            ['name' => 'ده صالح', 'en_name' => 'Dih Salah'],
            ['name' => 'دوشي', 'en_name' => 'Dushi'],
            ['name' => 'فرنگ او غارو', 'en_name' => 'Farang wa Ghar'],
            ['name' => 'گذرگاه نور', 'en_name' => 'Guzargahi Nur'],
            ['name' => 'خنجان', 'en_name' => 'Khinjan'],
            ['name' => 'خوست و فرنگ', 'en_name' => 'Khost wa Feren'],
            ['name' => 'خواجه هجران', 'en_name' => 'Khwaja Hijran'],
            ['name' => 'ناهرین', 'en_name' => 'Nahrin'],
            ['name' => 'پل حصار', 'en_name' => 'Puli Hisar'],
            ['name' => 'تاله و برفک', 'en_name' => 'Tala Wa Barfak'],
            ['name' => 'بانو', 'en_name' => 'Bano'],
            ['name' => 'بغلان مرکزی', 'en_name' => 'Baghlan Markazi'],
        ]);
    }
}
