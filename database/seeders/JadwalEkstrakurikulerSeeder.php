<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JadwalEkstrakurikuler;

class JadwalEkstrakurikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JadwalEkstrakurikuler::create([
            'hari' => 'Rabu',
            'waktu' => '08:49:00',
            'lokasi' => 'Lapangan utama',
            'id_ekstrakurikuler' => 'E002',
            'status' => 'tidak aktif',
        ]);

        JadwalEkstrakurikuler::create([
            'hari' => 'Rabu',
            'waktu' => '08:50:00',
            'lokasi' => 'Lapangan utama',
            'id_ekstrakurikuler' => 'E001',
            'status' => 'aktif',
        ]);

        // Tambahkan data lain jika diperlukan
    }
}
