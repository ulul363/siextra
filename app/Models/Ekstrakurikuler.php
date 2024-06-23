<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler extends Model
{
    use HasFactory;

    protected $table = 'ekstrakurikuler';
    protected $primaryKey = 'id_ekstrakurikuler';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_ekstrakurikuler',
        'nama_ekstrakurikuler',
        'nip_pembina',
        'nama',
    ];

    public function pembina()
    {
        return $this->belongsTo(Pembina::class, 'nip_pembina', 'nip_pembina');
    }

    public function jadwalEkstrakurikuler()
    {
        return $this->hasMany(JadwalEkstrakurikuler::class, 'id_ekstrakurikuler', 'id_ekstrakurikuler');
    }
}
