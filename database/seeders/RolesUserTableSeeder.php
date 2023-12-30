<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create role 'user'
        $role = Role::create([
            'name' => 'user'
        ]);

        // Assign specific permissions to the role 'user'
        $permissions = Permission::whereIn('name', ['bookings.index', 'bookings.create'])->get();
        $role->syncPermissions($permissions);
    }
}
