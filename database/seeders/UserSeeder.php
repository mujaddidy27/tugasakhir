<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'hak_akses' => ('admin'),
        ]);
        User::create([
            'name' => 'analis',
            'email' => 'analis@gmail.com',
            'password' => Hash::make('12345678'),
            'hak_akses' => ('analis'),
        ]);
    }
}