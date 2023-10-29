<?php

namespace OpenAfghanistan\Provinces\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use OpenAfghanistan\Provinces\Models\Province;

class ProvinceFactory extends Factory
{
    protected $model = Province::class;

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
        ];
    }
}
