<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'game_id' => 1,
                'sender_id' => 1,
                'comment' => '<strong><i><span style="background-color:hsl(0, 75%, 60%);">Ну да, даже я в это играю)))</span></i></strong>',
                'created_at' => now()->toDateTimeString()
            ],
            [
                'game_id' => 1,
                'sender_id' => 6,
                'comment' => '<b>МАЙНКРАФТ МОЯ ЖИЗНЬ!!!</b>',
                'created_at' => now()->toDateTimeString()
            ],
            [
                'game_id' => 1,
                'sender_id' => 4,
                'comment' => 'Мне понравилось!',
                'created_at' => now()->toDateTimeString()
            ],
            [
                'game_id' => 1,
                'sender_id' => 5,
                'comment' => 'Ну да можно и поиграть!',
                'created_at' => now()->toDateTimeString()
            ],
            [
                'game_id' => 3,
                'sender_id' => 4,
                'comment' => '<i>За орду!</i>',
                'created_at' => now()->toDateTimeString()
            ],
            [
                'game_id' => 3,
                'sender_id' => 7,
                'comment' => 'За альянс!',
                'created_at' => now()->toDateTimeString()
            ],
            [
                'game_id' => 4,
                'sender_id' => 2,
                'comment' => 'Очень крутая игра!',
                'created_at' => now()->toDateTimeString()
            ],
            [
                'game_id' => 4,
                'sender_id' => 4,
                'comment' => '<i>Лампово <3</i>',
                'created_at' => now()->toDateTimeString()
            ],
            [
                'game_id' => 5,
                'sender_id' => 8,
                'comment' => 'Ничего нового(',
                'created_at' => now()->toDateTimeString()
            ],
            [
                'game_id' => 6,
                'sender_id' => 4,
                'comment' => 'Очень крутое путишествие',
                'created_at' => now()->toDateTimeString()
            ],
            [
                'game_id' => 6,
                'sender_id' => 2,
                'comment' => 'Мне <b>зашло</b>',
                'created_at' => now()->toDateTimeString()
            ],
            [
                'game_id' => 8,
                'sender_id' => 5,
                'comment' => 'Душевная игрулька',
                'created_at' => now()->toDateTimeString()
            ],
        ]);
    }
}
