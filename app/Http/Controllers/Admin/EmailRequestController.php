<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmailRequest;

class EmailRequestController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Menggunakan paginate() untuk pagination
        $emailRequests = EmailRequest::when($search, function ($query, $search) {
            return $query->where('nama_lengkap', 'like', "%{$search}%")
                        ->orWhere('nik_nip', 'like', "%{$search}%")
                        ->orWhere('kode_tiket', 'like', "%{$search}%")
                        ->orWhere('email_pemohon', 'like', "%{$search}%")
                        ->orWhere('telepon', 'like', "%{$search}%");
        })->paginate(10); // Menampilkan 10 data per halaman

        return view('admin.email.index', compact('emailRequests', 'search'));
    }

    public function edit($id)
    {
        $emailRequest = EmailRequest::findOrFail($id);
        return view('admin.email.edit', compact('emailRequest'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik_nip' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'pangkat_golongan_eselon' => 'required|string|max:255',
            'dinas_unit_kerja' => 'required|string|max:255',
            'instansi' => 'required|string|max:255',
            'email_pemohon' => 'required|email|max:255',
            'telepon' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        $emailRequest = EmailRequest::findOrFail($id);
        $emailRequest->update($request->all());

        return redirect()->route('admin.email.index')
                         ->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $emailRequest = EmailRequest::findOrFail($id);
        $emailRequest->delete();

        return redirect()->route('admin.email.index')
                         ->with('success', 'Data berhasil dihapus.');
    }

    public function updateStatus(Request $request, $id)
    {
        $emailRequest = EmailRequest::findOrFail($id);
        $emailRequest->update(['status' => $request->input('status')]);

        return redirect()->route('admin.email.index')
                         ->with('success', 'Status berhasil diperbarui.');
    }
}
