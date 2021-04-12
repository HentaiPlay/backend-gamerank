<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call([
            CategorySeeder::class,
            StudioSeeder::class,
            GameSeeder::class,
            ImageSeeder::class,
            CategoryGameSeeder::class,
            StudioGameSeeder::class,
            UserSeeder::class,
            CommentSeeder::class,
            RatingSeeder::class
        ]);
    }
}
