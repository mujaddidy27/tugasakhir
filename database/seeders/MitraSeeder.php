<?php

namespace Database\Seeders;

use App\Models\Mitra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mitra::create([
            'nama' => 'Dr. Fathurrahman',
            'alamat' => 'Jl. Pahlawan Kec Kota Kab Sumenep',
            'kontak' => ('087237463746'),
        ]);
        Mitra::create([
            'nama' => 'Dr. Susilo',
            'alamat' => 'Jl. Pahlawan Kec Kota Kab Sumenep',
            'kontak' => ('087237463746'),
        ]);
    }
}