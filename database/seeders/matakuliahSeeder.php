<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class matakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('matakuliahs')->insert([
            'kodeMatakuliah' => 'SYS00001',
            'namaMatakuliah' => 'Pemrograman Aplikasi Bisnis',
            'sks' => 4
        ]);

        DB::table('matakuliahs')->insert([
            'kodeMatakuliah' => 'SYS00002',
            'namaMatakuliah' => 'Pemasaran Digital',
            'sks' => 3
        ]);

        DB::table('matakuliahs')->insert([
            'kodeMatakuliah' => 'SYS00003',
            'namaMatakuliah' => 'Dasar Management Keuangan',
            'sks' => 3
        ]);

        DB::table('matakuliahs')->insert([
            'kodeMatakuliah' => 'SYS00004',
            'namaMatakuliah' => 'Sistem Informasi Perusahaan',
            'sks' => 3
        ]);
       
    }
}
