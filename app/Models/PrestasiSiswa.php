<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PrestasiSiswa extends Model
{
    use HasFactory;

    protected $table = 'prestasi_siswa';
    protected $primaryKey = 'id_prestasisiswa';

    protected $fillable = [
        'nis',
        'id_ekstrakurikuler',
        'deskripsi',
        'tahun_ajaran',
        'berkas'
    ];

    public function ekstrakurikuler()
    {
        return $this->belongsTo(Ekstrakurikuler::class, 'id_ekstrakurikuler', 'id_ekstrakurikuler');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nis', 'nis');
    }

    // Metode prestasiSiswa ini sepertinya tidak diperlukan dan bisa dihapus atau diganti sesuai kebutuhan
    public function prestasiSiswa()
    {
        return $this->hasMany(PrestasiSiswa::class, 'id_prestasi', 'id_prestasi');
    }
}
