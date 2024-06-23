<?php

namespace Database\Seeders;

use App\Models\PrestasiSiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            SiswaSeeder::class,
            PembinaSeeder::class,
            EkstrakurikulerSeeder::class,
            ProgramKegiatanSeeder::class,
            KehadiranSeeder::class,
            JadwalEkstrakurikulerSeeder::class,
            PrestasiSiswaSeeder::class,
            UserSeeder::class,
        ]);
    }
}
