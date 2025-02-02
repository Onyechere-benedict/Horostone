<?php

namespace Database\Seeders;

use App\Models\Stone;
use App\Models\StoneAffirmationSet;
use App\Models\StoneAssociationSet;
use App\Models\StoneCareCard;
use App\Models\StoneMiningSitesSet;
use App\Models\StonePropertySet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Stone::factory(60)
            ->has(StonePropertySet::factory())
            ->has(StoneAssociationSet::factory())
            ->has(StoneMiningSitesSet::factory())
            ->has(StoneCareCard::factory())
            ->has(StoneAffirmationSet::factory())
            ->create();
    }
}
