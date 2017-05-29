<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql2')->table('users')->insert([
            'username' => 'username',
            
            'password' => bcrypt('username'),
        ]);
    }
}
