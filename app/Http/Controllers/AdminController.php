<?php

// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ESignRequest;
use App\Models\VulnerabilityAssessmentRequest;
use App\Models\EmailRequest;
use App\Models\ApiTTERequest;
use App\Models\Pengaduan; // Tambahkan model Pengaduan

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin/dashboard');
        }

        return redirect()->back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }

    public function dashboard()
    {
        $eSignCount = ESignRequest::count();
        $vulnerabilityAssessmentCount = VulnerabilityAssessmentRequest::count();
        $emailRequestCount = EmailRequest::count();
        $apiTTERequestCount = ApiTTERequest::count();
        $pengaduanCount = Pengaduan::count(); // Menghitung jumlah pengaduan

        return view('admin.dashboard', compact('eSignCount', 'vulnerabilityAssessmentCount', 'emailRequestCount', 'apiTTERequestCount', 'pengaduanCount'));
    }

    // Metode untuk menampilkan profil admin
    public function profile()
    {
        return view('admin.profile');
    }
}
