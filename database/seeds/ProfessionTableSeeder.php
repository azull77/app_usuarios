<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//Llamamos al modelo profession
use App\Profession;
class ProfessionTableSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        Profession::create([
            'name' => 'Front-end developer'
        ]);
        Profession::create([
            'name' => 'Back-end developer'
        ]);
        Profession::create([
            'name' => 'UI developer'
        ]);
    }
}
