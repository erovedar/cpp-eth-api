<?php

namespace Database\Seeders;

use Database\Seeders\UserSeeder;
use Database\Seeders\ListingSeeder;
use Database\Seeders\OrderSeeder;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // Users
            UserSeeder::class,
            ListingSeeder::class,
            OrderSeeder::class,

        ]);
        // \App\Models\User::factory(10)->create();
    }
}
