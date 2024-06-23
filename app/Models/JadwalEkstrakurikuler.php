<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalEkstrakurikuler extends Model
{
    use HasFactory;

    protected $table = 'jadwal_ekstrakurikuler';
    protected $primaryKey = 'id_jadwalekstrakurikuler';

    protected $fillable = [
        'hari',
        'waktu',
        'lokasi',
        'id_ekstrakurikuler',
        'status',
    ];

    public function ekstrakurikuler()
    {
        return $this->belongsTo(Ekstrakurikuler::class, 'id_ekstrakurikuler', 'id_ekstrakurikuler');
    }
}
