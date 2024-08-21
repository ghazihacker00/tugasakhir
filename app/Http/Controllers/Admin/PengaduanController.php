<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function index(Request $request)
{
    $search = $request->input('search');

    $pengaduan = Pengaduan::when($search, function ($query, $search) {
        return $query->where('nama', 'like', "%{$search}%")
                     ->orWhere('judul', 'like', "%{$search}%")
                     ->orWhere('email', 'like', "%{$search}%")
                     ->orWhere('telepon', 'like', "%{$search}%")
                     ->orWhere('prioritas', 'like', "%{$search}%");
    })->paginate(10); // Pastikan menggunakan paginate atau get sesuai kebutuhan Anda

    return view('admin.pengaduan.index', compact('pengaduan', 'search'));
}

    public function edit($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('admin.pengaduan.edit', compact('pengaduan'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'judul' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'divisi' => 'required|string|max:255',
        'prioritas' => 'required|string|max:255',
        'layanan' => 'required|string|max:255',
        'telepon' => 'required|string|max:255',
        'pesan' => 'required|string',
        'lampiran' => 'nullable|file|mimes:jpeg,png,pdf,doc,docx|max:2048',
    ]);

    $pengaduan = Pengaduan::findOrFail($id);

    // Check if a new file is uploaded
    if ($request->hasFile('lampiran')) {
        // Store the new file and update the 'berkas' field
        $lampiranPath = $request->file('lampiran')->storeAs(
            'lampiran',
            $request->file('lampiran')->getClientOriginalName(),
            'public'
        );
        $pengaduan->lampiran = $lampiranPath;
    }

    // Update the other fields
    $pengaduan->update($request->except('lampiran'));

    // Save the updated data
    $pengaduan->save();

    return redirect()->route('admin.pengaduan.index')
                     ->with('success', 'Data berhasil diperbarui.');
}


    public function destroy($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->delete();

        return redirect()->route('admin.pengaduan.index')
                         ->with('success', 'Data berhasil dihapus.');
    }
}
