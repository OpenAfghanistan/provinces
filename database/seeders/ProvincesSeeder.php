<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // call all seeders exits in seeder folder
        $this->call([
            KabulProvinceSeeder::class,
            HeartProvinceSeeder::class,
            BadakhshanProvinceSeeder::class,
            KandaharProvinceSeeder::class,
            GhazniProvinceSeeder::class,
            NangarharProvinceSeeder::class,
            BadghisProvinceSeeder::class,
            BaghlanProvinceSeeder::class,
            BalkhProvinceSeeder::class,
            BamyanProvinceSeeder::class,
            DaikundiProvinceSeeder::class,
            FarahProvinceSeeder::class,
            FaryabProvinceSeeder::class,
            GhorProvinceSeeder::class,
            HelmandProvinceSeeder::class,
            JawzjanProvinceSeeder::class,
            KapisaProvinceSeeder::class,
            KhostProvinceSeeder::class,
            KunarProvinceSeeder::class,
            KunduzProvinceSeeder::class,
            LaghmanProvinceSeeder::class,
            LoggerProvinceSeeder::class,
            MaidanWardakProvinceSeeder::class,
            NimrozProvinceSeeder::class,
            NuristanProvinceSeeder::class,
            PaktiaProvinceSeeder::class,
            PaktikaProvinceSeeder::class,
            PanjshirProvinceSeeder::class,
            ParwanProvinceSeeder::class,
            SamanganProvinceSeeder::class,
            SarePolProvinceSeeder::class,
            TakharProvinceSeeder::class,
            UruzganProvinceSeeder::class,
            ZabulProvinceSeeder::class,
        ]);
    }
}
