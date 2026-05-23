<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Override;

class Reservasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'tanggal',
        'jam',
        'jumlah_orang',
        'pilih_acara',
        'catatan'
    ];
}