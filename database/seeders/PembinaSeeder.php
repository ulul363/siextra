<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pembina;

class PembinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pembina::updateOrCreate(
            ['nip_pembina' => 19792109790003], // Kondisi pencarian berdasarkan nip_pembina
            [
                'nama' => 'Ulul Azmi',
                'email' => 'ululahmad3@gmail.com',
                'no_hp' => '0895340452388',
                'alamat' => 'Damalang',
                'jenis_kelamin' => 'L',
            ]
        );

        // Tambahkan data lain jika diperlukan
    }
}
