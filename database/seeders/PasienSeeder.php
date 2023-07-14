<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::create([
            'nama' => 'ahmad',
            'tgl_lahir' => '1986-08-15',
            'j_kelamin' => 'Pria',
            'kategori_id' => 1,
            'no_hp' => '1234567890',
            'alamat' => 'sumenep',
            'user_id' => 1,
        ]);
    }
}
