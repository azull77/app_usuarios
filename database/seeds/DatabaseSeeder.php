<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTable(['professions','users']); //Pasamos el array de las tablas
        $this->call(ProfessionTableSeeder::class);
        $this->call(UsersTableSeeder::class);

    }
    public function truncateTable($table = array()){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        for ($i = 0; $i < count($table); $i++){
            DB::table($table[$i])->truncate();
        }
        
    }
}
