<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
            'password' => 'password'
        ]);

        $this->call(UserSeeder::class);
        $this->call(StoneSeeder::class);
        // $this->call(StonePropertySetSeeder::class);
        // $this->call(StoneAssociationSetSeeder::class);
        // $this->call(StoneMiningSitesSetSeeder::class);
        // $this->call(StoneCareCardSeeder::class);
        // $this->call(StoneAffirmationSetSeeder::class);
    }
}