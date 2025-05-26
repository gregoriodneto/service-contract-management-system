<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name'=> 'client']);
        Role::create(['name'=> 'provider']);

        Permission::create(['name'=> 'manage contracts']);
        Permission::create(['name'=> 'create contracts']);
        Permission::create(['name'=> 'view contracts']);

        $admin = Role::findByName('admin');
        $admin->givePermissionTo(Permission::all());

        $client = Role::findByName('client');
        $client->givePermissionTo(['view contracts', 'create contracts']);

        $provider = Role::findByName('provider');
        $provider->givePermissionTo(['manage contracts']);
    }
}
