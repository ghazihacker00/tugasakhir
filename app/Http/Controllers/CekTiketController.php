<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ESignRequest;
use App\Models\EmailRequest;
use App\Models\VulnerabilityAssessmentRequest;

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

        // Jika tidak ditemukan
        return redirect()->back()->withErrors(['kode_tiket' => 'Kode tiket tidak ditemukan.']);
    }
}

