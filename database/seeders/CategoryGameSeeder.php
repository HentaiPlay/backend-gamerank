<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_game')->insert([
            [
                'category_id'   => 1,
                'game_id'       => 1
            ],
            [
                'category_id'   => 3,
                'game_id'       => 2
            ],
            [
                'category_id'   => 2,
                'game_id'       => 3
            ],
            [
                'category_id'   => 3,
                'game_id'       => 3
            ],
            [
                'category_id'   => 1,
                'game_id'       => 4
            ],
            [
                'category_id'   => 2,
                'game_id'       => 4
            ],
            [
                'category_id'   => 3,
                'game_id'       => 5
            ],
            [
                'category_id'   => 1,
                'game_id'       => 6
            ],
            [
                'category_id'   => 2,
                'game_id'       => 6
            ],
            [
                'category_id'   => 4,
                'game_id'       => 7
            ],
            [
                'category_id'   => 1,
                'game_id'       => 8
            ],
            [
                'category_id'   => 2,
                'game_id'       => 9
            ],
            [
                'category_id'   => 4,
                'game_id'       => 10
            ],
        ]);
    }
}
