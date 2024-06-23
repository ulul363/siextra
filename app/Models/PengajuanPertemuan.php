<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanPertemuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_pertemuan';

    protected $fillable = [
        'nis',
        'nip_pembina',
        'tanggal_pengajuan',
        'status',
    ];

    public function pembina()
    {
        return $this->belongsTo(Pembina::class, 'nip_pembina', 'nip_pembina');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nis', 'nis');
    }
}

