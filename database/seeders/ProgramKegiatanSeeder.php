<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProgramKegiatan;

class ProgramKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Periksa apakah program kegiatan sudah ada sebelumnya
        $program = ProgramKegiatan::where('nama_program', 'Open Recruitmen')->first();

        // Jika belum ada, buat data baru
        if (!$program) {
            ProgramKegiatan::create([
                'nama_program' => 'Open Recruitmen',
                'deskripsi' => 'Anggota Baru',
                'tahun_ajaran' => '2024/2025',
                'id_ekstrakurikuler' => 'E002',
            ]);
        }
    }
}
