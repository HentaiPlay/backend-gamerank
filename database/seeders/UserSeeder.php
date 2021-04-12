<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nickname'      => 'admin',
                'email'         => 'admin@gmail.com',
                'password'      => bcrypt('admin@hardpassword'),
                'avatar'        => 'admin.jpg',
                'is_admin'      => 1,
                'created_at'    => now()
            ],
            [
                'nickname'      => 'Fred',
                'email'         => 'fred@gmail.com',
                'password'      => bcrypt('fred@password'),
                'avatar'        => 'fred.jpg',
                'is_admin'      => 0,
                'created_at'    => now()
            ],
            [
                'nickname'      => 'Mark',
                'email'         => 'mark@gmail.com',
                'password'      => bcrypt('mark@password'),
                'avatar'        => 'mark.jpg',
                'is_admin'      => 0,
                'created_at'    => now()
            ],
            [
                'nickname'      => 'Vika',
                'email'         => 'vika@gmail.com',
                'password'      => bcrypt('vika@password'),
                'avatar'        => 'vika.jpg',
                'is_admin'      => 0,
                'created_at'    => now()
            ],
            [
                'nickname'      => 'Nemo',
                'email'         => 'nemo@gmail.com',
                'password'      => bcrypt('nemo@password'),
                'avatar'        => null,
                'is_admin'      => 0,
                'created_at'    => now()
            ],
            [
                'nickname'      => 'John',
                'email'         => 'jhon@gmail.com',
                'password'      => bcrypt('jhon@password'),
                'avatar'        => 'jhon.jpg',
                'is_admin'      => 0,
                'created_at'    => now()
            ],
            [
                'nickname'      => 'Margret',
                'email'         => 'margret@gmail.com',
                'password'      => bcrypt('margret@password'),
                'avatar'        => null,
                'is_admin'      => 0,
                'created_at'    => now()
            ],
            [
                'nickname'      => 'Romul',
                'email'         => 'romul@gmail.com',
                'password'      => bcrypt('romul@password'),
                'avatar'        => null,
                'is_admin'      => 0,
                'created_at'    => now()
            ],
        ]);
    }
}
