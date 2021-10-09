<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => str_random(1),
            'email' => 'henrry1@gmail.com',
            'password' => bcrypt('jose'),
            'profession_id' => 1
        ]);
        User::create([
            'name' => 'henrry',
            'email' => 'henrry2@gmail.com',
            'password' => bcrypt('henrry'),
            'profession_id' => 2
        ]);
        User::create([
            'name' => 'henrry',
            'email' => 'henrry3@gmail.com',
            'password' => bcrypt('henrry'),
            'profession_id' => 3
        ]);
    }
}
