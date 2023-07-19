<?php

namespace Database\Seeders;

use App\Models\JenisPemeriksaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisPemeriksaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisPemeriksaan::create([
            'nama' => 'Microalbumen',
            'kode' => 'MCM',
            'nilai_rujukan' => '1-20',
            'satuan' => 'm/g',
            'harga' => '20000',

        ]);

        JenisPemeriksaan::create([
            'nama' => 'Ureum',
            'kode' => 'UM01',
            'nilai_rujukan' => '20-50',
            'satuan' => 'm/g',
            'harga' => '50000',

        ]);
        JenisPemeriksaan::create([
            'nama' => 'Kreatinin',
            'kode' => 'KTN',
            'nilai_rujukan' => '0,0-1,3',
            'satuan' => 'm/g',
            'harga' => '60000',

        ]);
        JenisPemeriksaan::create([
            'nama' => 'Kolesterol Total',
            'kode' => 'KTTL',
            'nilai_rujukan' => '1-200',
            'satuan' => 'm/g',
            'harga' => '100000',

        ]);
        JenisPemeriksaan::create([
            'nama' => 'Kolesterol HDL',
            'kode' => 'KHDL',
            'nilai_rujukan' => '1-20',
            'satuan' => 'm/g',
            'harga' => '20000',

        ]);
        JenisPemeriksaan::create([
            'nama' => 'Kolesterol LDL',
            'kode' => 'HLDL',
            'nilai_rujukan' => '1-20',
            'satuan' => 'm/g',
            'harga' => '30000',

        ]);
        JenisPemeriksaan::create([
            'nama' => 'Diabetes',
            'kode' => 'DIB',
            'nilai_rujukan' => '1-20',
            'satuan' => 'm/g',
            'harga' => '20000',

        ]);
    }
}