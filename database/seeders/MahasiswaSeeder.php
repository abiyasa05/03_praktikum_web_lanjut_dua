<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            'nim'=>'2141720000',
            'nama'=>'Supriyono',
            'alamat'=>'Jombang',
            'jk'=>'Laki-Laki',
        ]);
        DB::table('mahasiswa')->insert([
            'nim'=>'2141720021',
            'nama'=>'Tika',
            'alamat'=>'Surabaya',
            'jk'=>'Perempuan',
        ]);
        DB::table('mahasiswa')->insert([
            'nim'=>'2141723500',
            'nama'=>'Deni',
            'alamat'=>'Surakarta',
            'jk'=>'Laki-Laki',
        ]);
    }
}
