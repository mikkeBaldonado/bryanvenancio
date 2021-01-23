<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

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
        	'role' => 'Admin',
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Admin2020'),
        ]);
    }
}
