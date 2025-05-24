<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            "name"=> "root",
            "email"=> "root@example.com",
            "password"=> Hash::make('pass123'),
        ]);
    }
}
