<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * `php artisan db:seed --class=UserRolePermissionSeeder`
     */
    public function run(): void
    {
        DB::transaction(function () {
            User::query()->delete();

            User::firstOrCreate([
                'name' => 'Prabu Bima',
                'username' => 'prabubima',
                'password' => Hash::make('B15millah!')
            ]);

            User::firstOrCreate([
                'name' => 'Admin',
                'username' => 'admin',
                'password' => Hash::make('b15millah')
            ]);

            // Bersihkan cache di config
            Artisan::call('config:clear');

        });
    }
}