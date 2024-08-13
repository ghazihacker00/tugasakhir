<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_tiket',
        'nama_lengkap',
        'nik_nip',
        'jabatan',
        'pangkat_golongan_eselon',
        'dinas_unit_kerja',
        'instansi',
        'email_pemohon',
        'telepon',
        'alamat',
        'lampiran',
        'status',
    ];
}
