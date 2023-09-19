<?php

namespace ElFactory\AfghanistanProvinces\Database\Factories;

use ElFactory\AfghanistanProvinces\Models\Province;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Province>
 */
class ProvinceFactory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'en_name' => fake()->name()
        ];
    }
}
