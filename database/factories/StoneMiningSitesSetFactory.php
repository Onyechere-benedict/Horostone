<?php

namespace Database\Factories;

use App\Models\Stone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StoneMiningSitesSet>
 */
class StoneMiningSitesSetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nigeria' => fake()->city(),
            'global' => fake()->country(),
            'stone_id' => Stone::factory()
        ];
    }
}
