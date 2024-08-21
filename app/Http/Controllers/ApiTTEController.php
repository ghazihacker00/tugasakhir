<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApiTTERequest;
use Illuminate\Support\Str;

class ApiTTEController extends Controller
{
    public function create()
    {
        return view('api_tte.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik_nip' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'pangkat_golongan_eselon' => 'required|string|max:255',
            'dinas_unit_kerja' => 'required|string|max:255',
            'instansi' => 'required|string|max:255',
            'email_pemohon' => 'required|email|max:255',
            'telepon' => 'required|string|max:255',
            'alamat' => 'required|string',
            'surat_permohonan' => 'nullable|file|mimes:pdf,jpg,png,jpeg,docx,doc|max:2048',
        ]);

        // Membuat kode tiket
        $kodeTiket = 'D-' . strtoupper(Str::random(4)) . '-' . strtoupper(Str::random(4)) . '-' . strtoupper(Str::random(4));

        // Menyimpan file surat permohonan
        $suratPermohonanPath = $request->file('surat_permohonan') ? $request->file('surat_permohonan')->storeAs(
            'surat_permohonan',
            $request->file('surat_permohonan')->getClientOriginalName(),
            'public'
        ) : null;

        // Menyimpan data ke database
        ApiTTERequest::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nik_nip' => $request->nik_nip,
            'jabatan' => $request->jabatan,
            'pangkat_golongan_eselon' => $request->pangkat_golongan_eselon,
            'dinas_unit_kerja' => $request->dinas_unit_kerja,
            'instansi' => $request->instansi,
            'email_pemohon' => $request->email_pemohon,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'surat_permohonan' => $suratPermohonanPath,
            'kode_tiket' => $kodeTiket,
            'status' => 'new',
        ]);

        return redirect()->route('api-tte.ticket', ['kode_tiket' => $kodeTiket]);
    }

    public function showTicket($kode_tiket)
    {
        $apiTTERequest = ApiTTERequest::where('kode_tiket', $kode_tiket)->firstOrFail();
        return view('api_tte.ticket', compact('apiTTERequest'));
    }
}
