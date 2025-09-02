<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'superadmin',
            'full_name' => 'Super Administrator',
            'email' => 'superadmin@gmail.com',
            'user_type' => 'super_admin',
            'email_verified_at' => now(),
            'password' => Hash::make('superadmin'), 
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'username' => 'admin',
            'full_name' => 'Site Administrator',
            'email' => 'admin@gmail.com',
            'user_type' => 'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('admin1234'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'username' => 'user',
            'full_name' => 'Regular User',
            'email' => 'user@gmail.com',
            'user_type' => 'user',
            'email_verified_at' => now(),
            'password' => Hash::make('user1234'),
            'remember_token' => Str::random(10),
        ]);
    }
}
