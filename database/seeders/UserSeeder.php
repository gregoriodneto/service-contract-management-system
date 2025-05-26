<?php

namespace Database\Seeders;

use App\Models\User;
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
        $admin = User::create([
            "name"=> "root",
            "email"=> "root@example.com",
            "password"=> Hash::make('pass123')
        ]);
        $admin->assignRole('admin');

        $client = User::create([
            "name"=> "joao",
            "email"=> "joao@example.com",
            "password"=> Hash::make('pass123')
        ]);
        $client->assignRole('client');
    }
}
