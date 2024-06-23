<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembina extends Model
{
    protected $table = 'pembina';
    protected $primaryKey = 'nip_pembina';
    public $incrementing = false;
    protected $keyType = 'integer';

    protected $fillable = [
        'nip_pembina',
        'nama',
        'email',
        'no_hp',
        'alamat',
        'jenis_kelamin',
    ];

    public function ekstrakurikuler()
    {
        return $this->hasMany(Ekstrakurikuler::class, 'nip_pembina', 'nip_pembina');
    }

    public function chat()
    {
        return $this->hasMany(Chat::class, 'nip_pembina', 'nip_pembina');
    }
}
