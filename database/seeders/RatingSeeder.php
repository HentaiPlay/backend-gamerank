<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rating')->insert([
            [
                'game_id' => 1,
                'user_id' => 1,
                'rank' => 10
            ],
            [
                'game_id' => 3,
                'user_id' => 1,
                'rank' => 8.5
            ],
            [
                'game_id' => 4,
                'user_id' => 1,
                'rank' => 10
            ],
            [
                'game_id' => 1,
                'user_id' => 2,
                'rank' => 10
            ],
            [
                'game_id' => 2,
                'user_id' => 2,
                'rank' => 7.5
            ],
            [
                'game_id' => 3,
                'user_id' => 2,
                'rank' => 4
            ],
            [
                'game_id' => 4,
                'user_id' => 2,
                'rank' => 8.5
            ],
            [
                'game_id' => 5,
                'user_id' => 2,
                'rank' => 7
            ],
            [
                'game_id' => 6,
                'user_id' => 2,
                'rank' => 10
            ],
            [
                'game_id' => 8,
                'user_id' => 2,
                'rank' => 9
            ],
            [
                'game_id' => 2,
                'user_id' => 3,
                'rank' => 8
            ],
            [
                'game_id' => 3,
                'user_id' => 3,
                'rank' => 7
            ],
            [
                'game_id' => 5,
                'user_id' => 3,
                'rank' => 9.5
            ],
            [
                'game_id' => 7,
                'user_id' => 3,
                'rank' => 6.5
            ],
            [
                'game_id' => 1,
                'user_id' => 4,
                'rank' => 9.5
            ],
            [
                'game_id' => 3,
                'user_id' => 4,
                'rank' => 7.5
            ],
            [
                'game_id' => 4,
                'user_id' => 4,
                'rank' => 8.5
            ],
            [
                'game_id' => 5,
                'user_id' => 4,
                'rank' => 4.5
            ],
            [
                'game_id' => 6,
                'user_id' => 4,
                'rank' => 8.5
            ],
            [
                'game_id' => 8,
                'user_id' => 4,
                'rank' => 8
            ],
            [
                'game_id' => 2,
                'user_id' => 5,
                'rank' => 3.5
            ],
            [
                'game_id' => 9,
                'user_id' => 5,
                'rank' => 8
            ],
            [
                'game_id' => 1,
                'user_id' => 6,
                'rank' => 9
            ],
            [
                'game_id' => 4,
                'user_id' => 6,
                'rank' => 9
            ],
            [
                'game_id' => 8,
                'user_id' => 6,
                'rank' => 7
            ],
            [
                'game_id' => 5,
                'user_id' => 7,
                'rank' => 7.5
            ],
            [
                'game_id' => 5,
                'user_id' => 8,
                'rank' => 5.5
            ],
            [
                'game_id' => 9,
                'user_id' => 8,
                'rank' => 4.5
            ]
        ]);
    }
}