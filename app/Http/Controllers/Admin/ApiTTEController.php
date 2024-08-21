<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApiTTERequest;

class ApiTTEController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $apiTteRequests = ApiTTERequest::when($search, function ($query, $search) {
            return $query->where('nama_lengkap', 'like', "%{$search}%")
                        ->orWhere('nik_nip', 'like', "%{$search}%")
                        ->orWhere('kode_tiket', 'like', "%{$search}%")
                        ->orWhere('email_pemohon', 'like', "%{$search}%")
                        ->orWhere('telepon', 'like', "%{$search}%");
        })->paginate(10); // Menggunakan paginate alih-alih get()

        return view('admin.api-tte.index', compact('apiTteRequests', 'search'));
    }


    public function edit($id)
    {
        $apiTteRequest = ApiTTERequest::findOrFail($id);
        return view('admin.api-tte.edit', compact('apiTteRequest'));
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

        $apiTteRequest = ApiTTERequest::findOrFail($id);
        $apiTteRequest->update($request->all());

        return redirect()->route('admin.api-tte.index')
                         ->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $apiTteRequest = ApiTTERequest::findOrFail($id);
        $apiTteRequest->delete();

        return redirect()->route('admin.api-tte.index')
                         ->with('success', 'Data berhasil dihapus.');
    }

    public function updateStatus(Request $request, $id)
    {
        $apiTteRequest = ApiTTERequest::findOrFail($id);
        $apiTteRequest->update(['status' => $request->input('status')]);

        return redirect()->route('admin.api-tte.index')
                         ->with('success', 'Status berhasil diperbarui.');
    }
}
