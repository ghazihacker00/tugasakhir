<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiTTERequest extends Model
{
    use HasFactory;

    protected $table = 'api_tte_requests'; // Pastikan nama tabel yang benar

    protected $fillable = [
        'nama_lengkap',
        'nik_nip',
        'jabatan',
        'pangkat_golongan_eselon',
        'dinas_unit_kerja',
        'instansi',
        'email_pemohon',
        'telepon',
        'alamat',
        'surat_permohonan',
        'kode_tiket',
        'status',
    ];
}
