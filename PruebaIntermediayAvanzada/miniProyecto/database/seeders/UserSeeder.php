<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'admin123',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Usuario',
            'email' => 'usuario@user.com',
            'password' => 'user123',
            'role' => 'user',
        ]);
    }
}
