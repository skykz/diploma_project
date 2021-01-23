<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
        DB::table('users')->insert([
            'name' => 'The Adviser',
            'email' => 'adviser1@gmail.com',
            'role' => 'adviser',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'The Student',
            'email' => 'student1@gmail.com',
            'role' => 'student',
            'password' => Hash::make('password'),
        ]);
    }
}
