<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artikel')->insert([
            'idartikel' => '1',
            'judul' => '7 Manfaat Fitness Untuk Kesehatan',
            'isi' => 'Berbagai gerakan dalam fitness, misalnya angkat beban atau latihan ketahanan, dapat menjaga kekuatan tulang dan merangsang pembentukan otot, terlebih jika dibarengi dengan asupan protein yang memadai.',
        ]);
    }
}
