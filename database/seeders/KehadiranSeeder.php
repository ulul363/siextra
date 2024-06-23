<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kehadiran;

class KehadiranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kehadiran::create([
            'nis' => 123456,
            'id_ekstrakurikuler' => 'E001',
            'nama_file' => '1718862113.pdf',
            'tanggal' => '2024-06-20',
        ]);

        Kehadiran::create([
            'nis' => 123456,
            'id_ekstrakurikuler' => 'E002',
            'nama_file' => '1718865587.pdf',
            'tanggal' => '2024-06-20',
        ]);

        // Tambahkan data lain jika diperlukan
    }
}
