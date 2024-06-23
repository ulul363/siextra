<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $primaryKey = 'nis';
    public $incrementing = false;
    protected $keyType = 'integer';

    protected $fillable = [
        'nis',
        'nama',
        'alamat',
        'jenis_kelamin',
        'email',
        'no_hp',
    ];

    public function kehadiran()
    {
        return $this->hasMany(Kehadiran::class, 'nis', 'nis');
    }

    public function chat()
    {
        return $this->hasMany(Chat::class, 'nis', 'nis');
    }

    public function prestasiSiswa()
    {
        return $this->hasMany(PrestasiSiswa::class, 'nis', 'nis');
    }
}
