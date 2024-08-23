<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanduanController extends Controller
{
    public function index()
    {
        // Contoh data, sesuaikan dengan data asli dari database atau storage Anda
        $sopFiles = [
            (object) ['name' => 'Penetapan SOP Digital Layanan Sersandian', 'path' => '/files/SOP DILANSANDI.pdf'],
        ];

        return view('panduan', compact('sopFiles'));
    }
}
