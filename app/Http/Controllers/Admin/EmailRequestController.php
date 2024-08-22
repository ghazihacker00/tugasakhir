<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailRequestController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

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
        $emailRequest = EmailRequest::findOrFail($id);

        $emailRequest->update($request->except(['_token', '_method', 'id']));

        return redirect()->route('admin.email.index')->with('success', 'Pengajuan Email berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $emailRequest = EmailRequest::findOrFail($id);
        $emailRequest->delete();

        return redirect()->route('admin.email.index')->with('success', 'Pengajuan Email berhasil dihapus.');
    }

    public function updateStatus(Request $request, $id)
    {
        $emailRequest = EmailRequest::findOrFail($id);
        $newStatus = $request->input('status');
        $emailRequest->status = $newStatus;
        $emailRequest->save();

        // Kirim notifikasi email kepada user
        $this->sendStatusUpdateEmail($emailRequest);

        if ($newStatus === 'rejected') {
            return redirect()->route('admin.email.rejected', $emailRequest->id);
        }

        return redirect()->route('admin.email.index')->with('success', 'Status pengajuan berhasil diperbarui.');
    }

    public function rejected($id)
    {
        $emailRequest = EmailRequest::findOrFail($id);
        return view('admin.email.rejected', compact('emailRequest'));
    }

    public function submitRejectionReason(Request $request, $id)
    {
        $request->validate([
            'reason' => 'required|string|max:1000',
        ]);

        $emailRequest = EmailRequest::findOrFail($id);

        // Kirim email alasan penolakan
        Mail::send('emails.email-rejection-reason', [
            'nama_lengkap' => $emailRequest->nama_lengkap,
            'kode_tiket' => $emailRequest->kode_tiket,
            'reason' => $request->input('reason'),
        ], function ($message) use ($emailRequest) {
            $message->to($emailRequest->email_pemohon)
                    ->subject('Alasan Penolakan Pengajuan Email');
        });

        return redirect()->route('admin.email.index')->with('success', 'Alasan penolakan berhasil dikirim.');
    }

    private function sendStatusUpdateEmail($emailRequest)
    {
        $data = [
            'nama_lengkap' => $emailRequest->nama_lengkap,
            'kode_tiket' => $emailRequest->kode_tiket,
            'status' => $emailRequest->status,
        ];

        Mail::send('emails.email-status-update', $data, function ($message) use ($emailRequest) {
            $message->to($emailRequest->email_pemohon)
                    ->subject('Status Tiket Anda Telah Diperbarui');
        });
    }
}
