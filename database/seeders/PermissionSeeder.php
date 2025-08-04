<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\{Role, Permission};

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        foreach (config('permission.permissions') as $permission) {
            foreach ($permission['access'] as $access) {
                if (!Permission::where('name', $access)->exists()) {
                    Permission::create(['name' => $access]);
                }
            }
        }
      
        $roleAdmin = Role::firstOrCreate(['name' => 'admin']);
       
        if ($roleAdmin) {
            $roleAdmin->givePermissionTo(Permission::all());
        }
    }
}