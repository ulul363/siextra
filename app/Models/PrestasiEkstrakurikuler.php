<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestasiEkstrakurikuler extends Model
{
    use HasFactory;

    protected $table = 'prestasi_ekstrakurikuler';
    protected $primaryKey = 'id_prestasi';

    protected $fillable = [
        'id_ekstrakurikuler',
        'nama_prestasi',
        'deskripsi',
        'tahun_ajaran',
    ];

    public function ekstrakurikuler()
    {
        return $this->belongsTo(Ekstrakurikuler::class, 'id_ekstrakurikuler');
    }

    public function prestasiSiswa()
    {
        return $this->hasMany(PrestasiSiswa::class, 'id_prestasi');
    }
}
