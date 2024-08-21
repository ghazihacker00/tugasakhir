<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanduanController extends Controller
{
    public function index()
    {
        // Contoh data, sesuaikan dengan data asli dari database atau storage Anda
        $sopFiles = [
            (object) ['name' => 'SOP Penerbitan Email Resmi Pemda', 'path' => '/files/SOP 1.pdf'],
            (object) ['name' => 'SOP Pengamanan Website Pemda', 'path' => '/files/SOP 2.pdf'],
            (object) ['name' => 'SOP Pengujian Keamanan Aplikasi Berbasis Web Pemda', 'path' => '/files/SOP 3.pdf'],
            (object) ['name' => 'Aplikasi Panter Esign TTE', 'path' => '/files/sop-panter-esign-tte.pdf'],
            (object) ['name' => 'SOP Penerbitan Tanda Tangan Elektronik (TTE)', 'path' => '/files/sop-tte.pdf'],
        ];

        return view('panduan', compact('sopFiles'));
    }
}
