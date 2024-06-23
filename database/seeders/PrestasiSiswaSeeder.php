<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PrestasiSiswa;
use App\Models\Ekstrakurikuler;
use App\Models\Siswa; // Import model Siswa jika belum diimpor

class PrestasiSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Cari ekstrakurikuler berdasarkan ID atau nama yang sesuai
        $ekstrakurikuler = Ekstrakurikuler::where('id_ekstrakurikuler', 'E001')->first();

        // Contoh jika menggunakan nama ekstrakurikuler
        // $ekstrakurikuler = Ekstrakurikuler::where('nama_ekstrakurikuler', 'Mini Soccer')->first();

        // Jika ekstrakurikuler ditemukan, tambahkan prestasi siswa
        if ($ekstrakurikuler) {
            // Cari siswa berdasarkan NIS
            $siswa = Siswa::where('nis', '123456')->first();

            // Periksa apakah data prestasi siswa sudah ada sebelumnya, misalnya berdasarkan deskripsi dan tahun ajaran
            $prestasi = PrestasiSiswa::where([
                'nis' => '123456',
                'id_ekstrakurikuler' => $ekstrakurikuler->id_ekstrakurikuler,
                'deskripsi' => 'Juara 1 Futsal Cup 2024',
                'tahun_ajaran' => '2023/2024',
                'berkas' => 'berkas/SdLLCwXjk8LKUhbi6gMBbRmjSmgDigklGK6IUFBZ.pdf' // Sesuaikan path berkas dengan yang benar
            ])->first();

            // Jika belum ada, buat data prestasi siswa baru
            if (!$prestasi && $siswa) {
                PrestasiSiswa::create([
                    'nis' => $siswa->nis,
                    'id_ekstrakurikuler' => $ekstrakurikuler->id_ekstrakurikuler,
                    'deskripsi' => 'Juara 1 Futsal Cup 2024',
                    'tahun_ajaran' => '2023/2024',
                    'berkas' => 'berkas/SdLLCwXjk8LKUhbi6gMBbRmjSmgDigklGK6IUFBZ.pdf' // Sesuaikan path berkas dengan yang benar
                ]);
            }
        }
    }
}
