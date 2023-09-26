<?php

namespace ElFactory\AfghanistanProvinces\Database\Factories;

use ElFactory\AfghanistanProvinces\Models\District;
use ElFactory\AfghanistanProvinces\Models\Province;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<District>
 */
class DistrictFactory extends Factory
{
    protected $model = District::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'en_name' => fake()->name(),
            'province_id' => Province::factory()->create(),
        ];
    }
}
