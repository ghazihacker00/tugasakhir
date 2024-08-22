<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ESignRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $newStatus = $request->input('status');
        $eSignRequest->status = $newStatus;
        $eSignRequest->save();

        // Kirim notifikasi email kepada user
        $this->sendStatusUpdateEmail($eSignRequest);

        if ($newStatus === 'rejected') {
            return redirect()->route('admin.e-sign.rejected', $eSignRequest->id);
        }

        return redirect()->route('admin.e-sign.index')->with('success', 'Status pengajuan berhasil diperbarui.');
    }

    public function rejected($id)
    {
        $eSignRequest = ESignRequest::findOrFail($id);
        return view('admin.e-sign.rejected', compact('eSignRequest'));
    }

    public function submitRejectionReason(Request $request, $id)
    {
        $request->validate([
            'reason' => 'required|string|max:1000',
        ]);

        $eSignRequest = ESignRequest::findOrFail($id);

        // Kirim email alasan penolakan
        Mail::send('emails.e-sign-rejection-reason', [
            'nama_lengkap' => $eSignRequest->nama_lengkap,
            'kode_tiket' => $eSignRequest->kode_tiket,
            'reason' => $request->input('reason'),
        ], function ($message) use ($eSignRequest) {
            $message->to($eSignRequest->email_pemohon)
                    ->subject('Alasan Penolakan Pengajuan E-Sign');
        });

        return redirect()->route('admin.e-sign.index')->with('success', 'Alasan penolakan berhasil dikirim.');
    }

    private function sendStatusUpdateEmail($eSignRequest)
    {
        $data = [
            'nama_lengkap' => $eSignRequest->nama_lengkap,
            'kode_tiket' => $eSignRequest->kode_tiket,
            'status' => $eSignRequest->status,
        ];

        Mail::send('emails.e-sign-status-update', $data, function ($message) use ($eSignRequest) {
            $message->to($eSignRequest->email_pemohon)
                    ->subject('Status Tiket Anda Telah Diperbarui');
        });
    }
}
