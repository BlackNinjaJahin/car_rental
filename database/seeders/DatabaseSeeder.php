<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Ensure the correct class is being called
        $this->call([
            UserTableSeeder::class, // This is calling the UsersTableSeeder
        ]);
    }
}
