<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Mail;

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
        $pengaduan = Pengaduan::create([
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

        // Kirim email konfirmasi kepada user
        $this->sendConfirmationEmail($pengaduan);

        return redirect()->route('pengaduan.create')->with('success', 'Pengaduan telah berhasil dikirim.');
    }

    private function sendConfirmationEmail($pengaduan)
    {
        $data = [
            'nama' => $pengaduan->nama,
            'judul' => $pengaduan->judul,
            'pesan' => $pengaduan->pesan,
            'prioritas' => $pengaduan->prioritas,
        ];

        Mail::send('emails.pengaduan-confirmation', $data, function ($message) use ($pengaduan) {
            $message->to($pengaduan->email)
                    ->subject('Konfirmasi Pengaduan Anda');
        });
    }
}
