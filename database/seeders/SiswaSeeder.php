<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Periksa apakah siswa dengan NIS 123456 sudah ada sebelumnya
        $siswa = Siswa::where('nis', '123456')->first();

        // Jika belum ada, buat data siswa baru
        if (!$siswa) {
            Siswa::create([
                'nis' => '123456',
                'nama' => 'Ahmad',
                'alamat' => 'Cilacap',
                'jenis_kelamin' => 'L',
                'email' => 'ahmad@gmail.com',
                'no_hp' => '08965342567',
            ]);
        }
    }
}
