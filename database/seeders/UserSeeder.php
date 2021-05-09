<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
            'role_id'=>1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'role_id'=>2,
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
        ]);
        
       
    }
}
