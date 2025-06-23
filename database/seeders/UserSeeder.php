<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Créer un utilisateur standard
        User::create([
            'name' => 'Utilisateur Test',
            'email' => 'user@amazom.com',
            'password' => Hash::make('user1234'),
            'role' => 'user',
            'email_verified_at' => now(),
        ]);

        // Créer un administrateur
        User::create([
            'name' => 'Administrateur',
            'email' => 'admin@amazom.com',
            'password' => Hash::make('admin1234'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);
    }
}
