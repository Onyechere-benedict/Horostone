<?php

namespace Database\Factories;

use App\Models\Stone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StoneAffirmationSet>
 */
class StoneAffirmationSetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'affirmation_1' => fake()->sentence(),
            'affirmation_2' => fake()->sentence(),
            'affirmation_3' => fake()->sentence(),
            'affirmation_4' => fake()->sentence(),
            'affirmation_5' => fake()->sentence(),
            'affirmation_6' => fake()->sentence(),
            'affirmation_7' => fake()->sentence(),
            'affirmation_8' => fake()->sentence(),
            'affirmation_9' => fake()->sentence(),
            'affirmation_10' => fake()->sentence(),
            'stone_id' => Stone::factory()
        ];
    }
}
