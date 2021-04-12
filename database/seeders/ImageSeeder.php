<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'game_id'       => 1,
                'path'          => 'mc-1.jpg'
            ],
            [
                'game_id'       => 1,
                'path'          => 'mc-2.jpg'
            ],
            [
                'game_id'       => 1,
                'path'          => 'mc-3.jpg'
            ],
            [
                'game_id'       => 1,
                'path'          => 'mc-4.jpg'
            ],
            [
                'game_id'       => 2,
                'path'          => 'tw2-1.jpg'
            ],
            [
                'game_id'       => 2,
                'path'          => 'tw2-2.jpg'
            ],
            [
                'game_id'       => 2,
                'path'          => 'tw2-3.jpg'
            ],
            [
                'game_id'       => 2,
                'path'          => 'tw2-4.jpg'
            ],
            [
                'game_id'       => 3,
                'path'          => 'wc3-1.png'
            ],
            [
                'game_id'       => 3,
                'path'          => 'wc3-2.jpg'
            ],
            [
                'game_id'       => 3,
                'path'          => 'wc3-3.jpg'
            ],
            [
                'game_id'       => 3,
                'path'          => 'wc3-4.jpeg'
            ],
            [
                'game_id'       => 4,
                'path'          => 'creaks-1.jpg'
            ],
            [
                'game_id'       => 4,
                'path'          => 'creaks-2.jpg'
            ],
            [
                'game_id'       => 4,
                'path'          => 'creaks-3.jpg'
            ],
            [
                'game_id'       => 4,
                'path'          => 'creaks-4.jpg'
            ],
            [
                'game_id'       => 5,
                'path'          => 'tww-1.jpeg'
            ],
            [
                'game_id'       => 5,
                'path'          => 'tww-2.jpeg'
            ],
            [
                'game_id'       => 5,
                'path'          => 'tww-3.jpg'
            ],
            [
                'game_id'       => 5,
                'path'          => 'tww-4.jpg'
            ],
            [
                'game_id'       => 6,
                'path'          => 'alice-1.jpg'
            ],
            [
                'game_id'       => 6,
                'path'          => 'alice-2.jpeg'
            ],
            [
                'game_id'       => 6,
                'path'          => 'alice-3.jpg'
            ],
            [
                'game_id'       => 6,
                'path'          => 'alice-4.jpg'
            ],
            [
                'game_id'       => 7,
                'path'          => 'nhl14-1.jpg'
            ],
            [
                'game_id'       => 7,
                'path'          => 'nhl14-2.jpg'
            ],
            [
                'game_id'       => 7,
                'path'          => 'nhl14-3.jpg'
            ],
            [
                'game_id'       => 7,
                'path'          => 'nhl14-4.jpg'
            ],
            [
                'game_id'       => 8,
                'path'          => 'mac-1.jpg'
            ],
            [
                'game_id'       => 8,
                'path'          => 'mac-2.jpg'
            ],
            [
                'game_id'       => 8,
                'path'          => 'mac-3.jpg'
            ],
            [
                'game_id'       => 8,
                'path'          => 'mac-4.jpg'
            ],
            [
                'game_id'       => 9,
                'path'          => 'diab-1.jpeg'
            ],
            [
                'game_id'       => 9,
                'path'          => 'diab-2.jpg'
            ],
            [
                'game_id'       => 9,
                'path'          => 'diab-3.jpg'
            ],
            [
                'game_id'       => 9,
                'path'          => 'diab-4.jpg'
            ],
            [
                'game_id'       => 10,
                'path'          => 'fifa-1.jpg'
            ],
            [
                'game_id'       => 10,
                'path'          => 'fifa-2.jpg'
            ],
            [
                'game_id'       => 10,
                'path'          => 'fifa-3.jpg'
            ],
            [
                'game_id'       => 10,
                'path'          => 'fifa-4.jpg'
            ]
        ]);
    }
}
