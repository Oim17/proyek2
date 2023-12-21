<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('paket')->insert([
            'kode' => 'P01',
            'nama' => '3 Bulan',
            'deskripsi' => 'Paket Sehat 3 Bulan',
            'harga' => 800000,
        ]);
    }
}
