<?php

namespace Database\Factories;

use App\Models\Stone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StoneAssociationSet>
 */
class StoneAssociationSetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'planet' => fake()->randomElement(['Venus', 'Neptune', 'Saturn', 'Jupiter']),
            'zodiac' => fake()->randomElement(['Pisces', 'Sagittoire', 'Leo', 'Capricorn']),
            'chakra' => fake()->words(3, true),
            'birth_month' => fake()->monthName(),
            'element' => fake()->randomElement(['Water', 'Air', 'Fire', 'Earth']),
            'stone_id' => Stone::factory()
        ];
    }
}
