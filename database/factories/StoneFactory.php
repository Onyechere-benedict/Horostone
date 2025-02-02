<?php

namespace Database\Factories;

use App\Models\StoneAffirmationSet;
use App\Models\StoneAssociationSet;
use App\Models\StoneCareCard;
use App\Models\StoneMiningSitesSet;
use App\Models\StonePropertySet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stone>
 */
class StoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Aquamarine', 'Onyx', 'Sapphire', 'Emerald', 'Amethyst', 'Moonstone', 'Opal']),
            'title' => fake()->randomElement(['Stone of Inspiration', 'Stone of Healing', 'Stone of Love', 'Stone of Purification', 'Stone of Endurance']),
            'description' => fake()->sentences(asText: true) . ' ' . fake()->sentences(asText: true) . ' ' . fake()->sentences(asText: true),
            // 'stone_property_set_id' => StonePropertySet::factory(),
            // 'stone_association_set_id' => StoneAssociationSet::factory(),
            'metaphysical_properties' => fake()->sentence(),
            'color_relations' => fake()->sentence(),
            // 'stone_mining_sites_set_id' => StoneMiningSitesSet::factory(),
            // 'stone_care_card_id' => StoneCareCard::factory(),
            // 'stone_affirmation_set_id' => StoneAffirmationSet::factory(),
            'image_url' => $this->getFilePath('test-images/' . fake()->numberBetween(1, 53))
        ];
    }

    private function getFilePath($incompleteFilePath)
    {
        $extensions = ['.jpg', '.png', '.webp', '.gif'];
        foreach ($extensions as $extension) {
            if (file_exists(public_path($incompleteFilePath . $extension))) {
                return $incompleteFilePath . $extension;
            }
        }

        return $incompleteFilePath . $extensions[0];
    }
}
