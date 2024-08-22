<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApiTTERequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

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
        $kodeTiket = 'A-' . Str::upper(Str::random(4)) . '-' . Str::upper(Str::random(4)) . '-' . Str::upper(Str::random(4));

        // Menyimpan file surat permohonan
        $suratPermohonanPath = null;
        if ($request->hasFile('surat_permohonan')) {
            $suratPermohonanPath = $request->file('surat_permohonan')->storeAs(
                'surat_permohonan',
                $request->file('surat_permohonan')->getClientOriginalName(),
                'public'
            );
        }

        // Menyimpan data ke database
        $apiTTERequest = ApiTTERequest::create([
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

        // Kirim email konfirmasi kepada user
        $this->sendConfirmationEmail($apiTTERequest);

        // Redirect ke halaman tiket
        return redirect()->route('api-tte.ticket', ['kode_tiket' => $kodeTiket]);
    }

    public function showTicket($kode_tiket)
    {
        $apiTTERequest = ApiTTERequest::where('kode_tiket', $kode_tiket)->firstOrFail();
        return view('api_tte.ticket', compact('apiTTERequest'));
    }

    private function sendConfirmationEmail($apiTTERequest)
    {
        $data = [
            'nama_lengkap' => $apiTTERequest->nama_lengkap,
            'kode_tiket' => $apiTTERequest->kode_tiket,
            'url_cek_tiket' => url('/cek-tiket'),
        ];

        Mail::send('emails.api-tte-confirmation', $data, function ($message) use ($apiTTERequest) {
            $message->to($apiTTERequest->email_pemohon)
                    ->subject('Konfirmasi Pengajuan API TTE');
        });
    }
}
