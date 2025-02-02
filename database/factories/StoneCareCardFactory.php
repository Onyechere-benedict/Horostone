<?php

namespace Database\Factories;

use App\Models\Stone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StoneCareCard>
 */
class StoneCareCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cleansing' => fake()->sentence(),
            'is_sun_safe' => fake()->randomElement([fake()->sentence(), 'Yes', 'No']),
            'is_water_safe' => fake()->randomElement([fake()->sentence(), 'Yes', 'No']),
            'recharge_method' => fake()->sentence(),
            'setting_intention' => fake()->sentences(asText: true),
            'stone_id' => Stone::factory()
        ];
    }
}
