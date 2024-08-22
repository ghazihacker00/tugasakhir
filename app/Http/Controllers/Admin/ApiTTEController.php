<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ApiTTERequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ApiTTEController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $apiTTERequests = ApiTTERequest::when($search, function ($query, $search) {
            return $query->where('nama_lengkap', 'like', "%{$search}%")
                         ->orWhere('nik_nip', 'like', "%{$search}%")
                         ->orWhere('kode_tiket', 'like', "%{$search}%")
                         ->orWhere('email_pemohon', 'like', "%{$search}%")
                         ->orWhere('telepon', 'like', "%{$search}%");
        })->paginate(10);

        return view('admin.api-tte.index', compact('apiTTERequests', 'search'));
    }

    public function edit($id)
    {
        $apiTTERequest = ApiTTERequest::findOrFail($id);
        return view('admin.api-tte.edit', compact('apiTTERequest'));
    }

    public function update(Request $request, $id)
    {
        $apiTTERequest = ApiTTERequest::findOrFail($id);
        $apiTTERequest->update($request->except(['_token', '_method', 'id']));

        return redirect()->route('admin.api-tte.index')->with('success', 'Pengajuan API TTE berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $apiTTERequest = ApiTTERequest::findOrFail($id);
        $apiTTERequest->delete();

        return redirect()->route('admin.api-tte.index')->with('success', 'Pengajuan API TTE berhasil dihapus.');
    }

    public function updateStatus(Request $request, $id)
    {
        $apiTTERequest = ApiTTERequest::findOrFail($id);
        $newStatus = $request->input('status');
        $apiTTERequest->status = $newStatus;
        $apiTTERequest->save();

        // Kirim notifikasi email kepada user
        $this->sendStatusUpdateEmail($apiTTERequest);

        if ($newStatus === 'rejected') {
            return redirect()->route('admin.api-tte.rejected', $apiTTERequest->id);
        }

        if ($newStatus === 'completed') {
            return redirect()->route('admin.api-tte.completed', $apiTTERequest->id);
        }

        return redirect()->route('admin.api-tte.index')->with('success', 'Status pengajuan berhasil diperbarui.');
    }

    public function rejected($id)
    {
        $apiTTERequest = ApiTTERequest::findOrFail($id);
        return view('admin.api-tte.rejected', compact('apiTTERequest'));
    }

    public function completed($id)
    {
        $apiTTERequest = ApiTTERequest::findOrFail($id);
        return view('admin.api-tte.completed', compact('apiTTERequest'));
    }

    public function submitCompletionDetails(Request $request, $id)
    {
        $request->validate([
            'reason' => 'required|string|max:1000',
            'berkas_lampiran' => 'required|file|mimes:pdf,jpg,png,jpeg|max:2048',
        ]);

        $apiTTERequest = ApiTTERequest::findOrFail($id);

        // Simpan lampiran
        $filePath = null;
        if ($request->hasFile('berkas_lampiran')) {
            $filePath = $request->file('berkas_lampiran')->store('completed_files', 'public');
        }

        // Kirim email completion details
        Mail::send('emails.api-tte-completed', [
            'nama_lengkap' => $apiTTERequest->nama_lengkap,
            'kode_tiket' => $apiTTERequest->kode_tiket,
            'reason' => $request->input('reason'),
            'filePath' => $filePath,
        ], function ($message) use ($apiTTERequest, $filePath) {
            $message->to($apiTTERequest->email_pemohon)
                    ->subject('Tiket Anda Telah Selesai');
            
            // Lampirkan file jika ada
            if ($filePath) {
                $message->attach(Storage::disk('public')->path($filePath));
            }
        });

        return redirect()->route('admin.api-tte.index')
                         ->with('success', 'Detail penyelesaian berhasil dikirim.');
    }

    public function submitRejectionReason(Request $request, $id)
    {
        $request->validate([
            'reason' => 'required|string|max:1000',
        ]);

        $apiTTERequest = ApiTTERequest::findOrFail($id);

        // Kirim email alasan penolakan
        Mail::send('emails.api-tte-rejection-reason', [
            'nama_lengkap' => $apiTTERequest->nama_lengkap,
            'kode_tiket' => $apiTTERequest->kode_tiket,
            'reason' => $request->input('reason'),
        ], function ($message) use ($apiTTERequest) {
            $message->to($apiTTERequest->email_pemohon)
                    ->subject('Alasan Penolakan Pengajuan API TTE');
        });

        return redirect()->route('admin.api-tte.index')
                         ->with('success', 'Alasan penolakan berhasil dikirim.');
    }

    private function sendStatusUpdateEmail($apiTTERequest)
    {
        $data = [
            'nama_lengkap' => $apiTTERequest->nama_lengkap,
            'kode_tiket' => $apiTTERequest->kode_tiket,
            'status' => $apiTTERequest->status,
        ];

        Mail::send('emails.api-tte-status-update', $data, function ($message) use ($apiTTERequest) {
            $message->to($apiTTERequest->email_pemohon)
                    ->subject('Status Tiket Anda Telah Diperbarui');
        });
    }
}
