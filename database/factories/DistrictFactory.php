<?php

namespace OpenAfghanistan\Provinces\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use OpenAfghanistan\Provinces\Models\District;
use OpenAfghanistan\Provinces\Models\Province;

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
