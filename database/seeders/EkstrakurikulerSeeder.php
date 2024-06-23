<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ekstrakurikuler;

class EkstrakurikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ekstrakurikuler::updateOrCreate(
            ['id_ekstrakurikuler' => 'E001'], // Kondisi pencarian berdasarkan id_ekstrakurikuler
            [
                'nip_pembina' => 19792109790003,
                'nama_ekstrakurikuler' => 'Mini Soccer',
                'nama' => 'Ulul Azmi',
            ]
        );

        Ekstrakurikuler::updateOrCreate(
            ['id_ekstrakurikuler' => 'E002'], // Kondisi pencarian berdasarkan id_ekstrakurikuler
            [
                'nip_pembina' => 19792109790003,
                'nama_ekstrakurikuler' => 'Futsal',
                'nama' => 'Ulul Azmi',
            ]
        );

        // Tambahkan data lain jika diperlukan
    }
}
