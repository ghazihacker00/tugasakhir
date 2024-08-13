<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailRequest;

class EmailRequestController extends Controller
{
    public function create()
    {
        return view('email.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nik_nip' => 'required',
            'jabatan' => 'required',
            'pangkat_golongan_eselon' => 'required',
            'dinas_unit_kerja' => 'required',
            'instansi' => 'required',
            'email_pemohon' => 'required|email',
            'telepon' => 'required',
            'alamat' => 'required',
            'lampiran' => 'file|nullable',
        ]);

        $lampiranPath = $request->file('lampiran') ? $request->file('lampiran')->store('public/lampiran') : null;

        $kodeTiket = 'C-' . substr(md5(uniqid(mt_rand(), true)), 0, 4) . '-' . substr(md5(uniqid(mt_rand(), true)), 4, 4) . '-' . substr(md5(uniqid(mt_rand(), true)), 8, 4);

        $emailRequest = EmailRequest::create([
            'kode_tiket' => $kodeTiket,
            'nama_lengkap' => $request->nama_lengkap,
            'nik_nip' => $request->nik_nip,
            'jabatan' => $request->jabatan,
            'pangkat_golongan_eselon' => $request->pangkat_golongan_eselon,
            'dinas_unit_kerja' => $request->dinas_unit_kerja,
            'instansi' => $request->instansi,
            'email_pemohon' => $request->email_pemohon,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'lampiran' => $lampiranPath,
            'status' => 'new',
        ]);

        return redirect()->route('email.tiket', ['kode_tiket' => $kodeTiket]);
    }

    public function tiket($kode_tiket)
    {
        $emailRequest = EmailRequest::where('kode_tiket', $kode_tiket)->firstOrFail();
        return view('email.tiket', compact('emailRequest'));
    }
}
