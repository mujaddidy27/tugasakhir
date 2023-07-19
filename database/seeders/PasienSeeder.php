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
            'nrm' => '',
            'nama' => 'Monif',
            'tgl_lahir' => '1999-08-15',
            'j_kelamin' => 'Pria',
            'nik' => '3507777777777',
            'no_hp' => '1234567890',
            'alamat' => 'sumenep',
            'user_id' => 1,

        ]);
    }
}