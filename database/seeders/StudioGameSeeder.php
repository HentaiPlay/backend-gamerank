<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudioGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('studio_game')->insert([

            [
                'studio_id' => 1,
                'game_id'   => 2,
            ],
            [
                'studio_id' => 1,
                'game_id'   => 5
            ],
            [
                'studio_id' => 2,
                'game_id'   => 2
            ],
            [
                'studio_id' => 2,
                'game_id'   => 5
            ],
            [
                'studio_id' => 3,
                'game_id'   => 4
            ],
            [
                'studio_id' => 3,
                'game_id'   => 8
            ],
            [
                'studio_id' => 4,
                'game_id'   => 6
            ],
            [
                'studio_id' => 4,
                'game_id'   => 7
            ],
            [
                'studio_id' => 4,
                'game_id'   => 10
            ],
            [
                'studio_id' => 5,
                'game_id'   => 1
            ],
            [
                'studio_id' => 6,
                'game_id'   => 3
            ],
            [
                'studio_id' => 6,
                'game_id'   => 9
            ]
        ]);
    }
}
