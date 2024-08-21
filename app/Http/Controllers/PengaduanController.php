<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function create()
    {
        return view('pengaduan.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'divisi' => 'required|string|max:255',
            'prioritas' => 'required|string|max:255',
            'layanan' => 'required|string|max:255',
            'telepon' => 'required|string|max:255',
            'pesan' => 'required|string',
            'lampiran' => 'nullable|file|mimes:pdf,jpg,png,jpeg,docx,doc|max:2048',
        ]);

        // Menyimpan file lampiran
        $lampiranPath = $request->file('lampiran') ? $request->file('lampiran')->storeAs(
            'lampiran',
            $request->file('lampiran')->getClientOriginalName(),
            'public'
        ) : null;

        // Menyimpan data ke database
        Pengaduan::create([
            'judul' => $request->judul,
            'nama' => $request->nama,
            'email' => $request->email,
            'divisi' => $request->divisi,
            'prioritas' => $request->prioritas,
            'layanan' => $request->layanan,
            'telepon' => $request->telepon,
            'pesan' => $request->pesan,
            'lampiran' => $lampiranPath,
        ]);

        return redirect()->route('pengaduan.create')->with('success', 'Pengaduan telah berhasil dikirim.');
    }
}
