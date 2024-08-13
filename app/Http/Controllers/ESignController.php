<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ESignRequest;
use Illuminate\Support\Str;

class ESignController extends Controller
{
    public function create()
    {
        return view('e_sign.create');
    }

    public function store(Request $request)
    {
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
            'surat_permohonan' => 'nullable|file|mimes:pdf,jpg,png,jpeg',
        ]);

        $kodeTiket = 'A-' . Str::upper(Str::random(4)) . '-' . Str::upper(Str::random(4)) . '-' . Str::upper(Str::random(4));

        $suratPermohonanPath = $request->file('surat_permohonan') ? $request->file('surat_permohonan')->store('public/surat_permohonan') : null;

        $eSignRequest = ESignRequest::create([
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

        return redirect()->route('e-sign.ticket', ['kode_tiket' => $kodeTiket]);
    }

    public function showTicket($kode_tiket)
    {
        $eSignRequest = ESignRequest::where('kode_tiket', $kode_tiket)->firstOrFail();
        return view('e_sign.ticket', compact('eSignRequest'));
    }
}
