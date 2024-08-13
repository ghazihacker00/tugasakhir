<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'nama',
        'email',
        'divisi',
        'prioritas',
        'layanan',
        'telepon',
        'pesan',
        'lampiran',
    ];
}
