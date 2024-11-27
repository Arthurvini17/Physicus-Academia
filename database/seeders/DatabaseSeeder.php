<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Chamar o seeder PlanosSeeder
        $this->call([
            PlanosSeeder::class,
            UserSeeder::class,
        ]);
    }
}
