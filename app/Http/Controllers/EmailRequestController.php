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
            'lampiran' => 'nullable|file|mimes:pdf,jpg,png,jpeg,docx,doc|max:2048',
        ]);

        // Menyimpan file lampiran
        $lampiranPath = $request->file('lampiran') ? $request->file('lampiran')->storeAs(
            'lampiran',
            $request->file('lampiran')->getClientOriginalName(),
            'public'
        ) : null;

        // Membuat kode tiket
        $kodeTiket = 'C-' . substr(md5(uniqid(mt_rand(), true)), 0, 4) . '-' . substr(md5(uniqid(mt_rand(), true)), 4, 4) . '-' . substr(md5(uniqid(mt_rand(), true)), 8, 4);

        // Menyimpan data ke database
        EmailRequest::create([
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
