<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //permission for dashboard
        Permission::create(['name' => 'dashboard.index']);

        //permission for villas
        Permission::create(['name' => 'villas.index']);
        Permission::create(['name' => 'villas.create']);
        Permission::create(['name' => 'villas.edit']);
        Permission::create(['name' => 'villas.delete']);

        //permission for bookings
        Permission::create(['name' => 'bookings.index']);
        Permission::create(['name' => 'bookings.create']);
        Permission::create(['name' => 'bookings.edit']);
        Permission::create(['name' => 'bookings.delete']);

        //permission for galleries
        Permission::create(['name' => 'galleries.index']);
        Permission::create(['name' => 'galleries.create']);
        Permission::create(['name' => 'galleries.delete']);

        //permission for roles
        Permission::create(['name' => 'roles.index']);
        Permission::create(['name' => 'roles.create']);
        Permission::create(['name' => 'roles.edit']);
        Permission::create(['name' => 'roles.delete']);

        //permission for permissions
        Permission::create(['name' => 'permissions.index']);

        //permission for users
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.edit']);
        Permission::create(['name' => 'users.delete']);
    }
}
