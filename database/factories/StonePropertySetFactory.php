<?php

namespace Database\Factories;

use App\Models\Stone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StonePropertySet>
 */
class StonePropertySetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hardness' => fake()->randomElement(['7.5-8', '6.5-7', '7', '5.5-6']),
            'composition' => fake()->words(3, true),
            'mineral_family' => fake()->words(2, true),
            'lustre' => fake()->word(),
            'stone_id' => Stone::factory()
        ];
    }
}
