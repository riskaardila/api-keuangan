<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UangMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('uang_masuks')->insert([
            'users_id' => '1',
            'nama_masuk' => 'Uang Kas',
            'deskripsi' => 'Uang Kas dari Pak Arbi',
            'harga_masuk' => '250000',
            'tanggal_masuk' => '2023-06-10'
        ]);
    }
}
