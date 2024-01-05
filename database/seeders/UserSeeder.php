<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Business User',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('1234'),
                'role' => 'admin'
            ],
            [
                'name' => 'Project Manager',
                'email' => 'manager@gmail.com',
                'password' => bcrypt('1234'),
                'role' => 'p_manager'
            ],
            [
                'name' => 'Developer one',
                'email' => 'developer1@gmail.com',
                'password' => bcrypt('1234'),
                'role' => 'developer'
            ],
            [
                'name' => 'Developer Two',
                'email' => 'developer2@gmail.com',
                'password' => bcrypt('1234'),
                'role' => 'developer'
            ]
        ]);
    }
}
