<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ESignRequest;
use Illuminate\Http\Request;

class ESignController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $eSignRequests = ESignRequest::when($search, function($query, $search) {
            return $query->where('nama_lengkap', 'like', "%{$search}%")
                        ->orWhere('nik_nip', 'like', "%{$search}%")
                        ->orWhere('kode_tiket', 'like', "%{$search}%")
                        ->orWhere('email_pemohon', 'like', "%{$search}%")
                        ->orWhere('telepon', 'like', "%{$search}%");
        })->paginate(10); // Menampilkan 10 data per halaman

        return view('admin.e-sign.index', compact('eSignRequests', 'search'));
    }

    public function edit($id)
    {
        $eSignRequest = ESignRequest::findOrFail($id);
        return view('admin.e-sign.edit', compact('eSignRequest'));
    }

    public function update(Request $request, $id)
    {
        $eSignRequest = ESignRequest::findOrFail($id);

        $eSignRequest->update($request->except(['_token', '_method', 'id']));

        return redirect()->route('admin.e-sign.index')->with('success', 'Pengajuan E-Sign berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $eSignRequest = ESignRequest::findOrFail($id);
        $eSignRequest->delete();

        return redirect()->route('admin.e-sign.index')->with('success', 'Pengajuan E-Sign berhasil dihapus.');
    }

    public function updateStatus(Request $request, $id)
    {
        $eSignRequest = ESignRequest::findOrFail($id);
        $eSignRequest->status = $request->input('status');
        $eSignRequest->save();

        return redirect()->route('admin.e-sign.index')->with('success', 'Status pengajuan berhasil diperbarui.');
    }
}
