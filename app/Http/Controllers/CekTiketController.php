<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ESignRequest;
use App\Models\EmailRequest;
use App\Models\VulnerabilityAssessmentRequest;
use App\Models\ApiTTERequest; // Tambahkan model ini

class CekTiketController extends Controller
{
    public function index()
    {
        return view('cek-tiket.index');
    }

    public function cek(Request $request)
    {
        $request->validate([
            'kode_tiket' => 'required|string',
        ]);

        $kodeTiket = $request->input('kode_tiket');

        // Cari di tabel E-Sign
        $eSignRequest = ESignRequest::where('kode_tiket', $kodeTiket)->first();
        if ($eSignRequest) {
            return view('cek-tiket.result', ['request' => $eSignRequest, 'type' => 'e-sign']);
        }

        // Cari di tabel Email
        $emailRequest = EmailRequest::where('kode_tiket', $kodeTiket)->first();
        if ($emailRequest) {
            return view('cek-tiket.result', ['request' => $emailRequest, 'type' => 'email']);
        }

        // Cari di tabel Vulnerability Assessment
        $vulnerabilityRequest = VulnerabilityAssessmentRequest::where('kode_tiket', $kodeTiket)->first();
        if ($vulnerabilityRequest) {
            return view('cek-tiket.result', ['request' => $vulnerabilityRequest, 'type' => 'vulnerability-assessment']);
        }

        // Cari di tabel API TTE
        $apiTTERequest = ApiTTERequest::where('kode_tiket', $kodeTiket)->first();
        if ($apiTTERequest) {
            return view('cek-tiket.result', ['request' => $apiTTERequest, 'type' => 'api-tte']);
        }

        // Jika tidak ditemukan
        return redirect()->back()->withErrors(['kode_tiket' => 'Kode tiket tidak ditemukan.']);
    }
}
