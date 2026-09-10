<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Carlos Oliveira',
            'email' => 'carlos@email.com',
            'password' => Hash::make('12345678'),
            'role' => 'professor',
        ]);

        User::create([
            'name' => 'Ana Paula Souza',
            'email' => 'ana@email.com',
            'password' => Hash::make('12345678'),
            'role' => 'professor',
        ]);

        User::create([
            'name' => 'João Martins',
            'email' => 'joao@email.com',
            'password' => Hash::make('12345678'),
            'role' => 'professor',
        ]);

        User::create([
            'name' => 'Administrador',
            'email' => 'admin@email.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);
    }
}