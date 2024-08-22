@extends('admin.layouts.master')

@section('title', 'Detail Penyelesaian Pengajuan E-Sign')

@section('content')
<div class="bg-white shadow-lg rounded-xl p-8 max-w-3xl mx-auto">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Masukkan Detail Penyelesaian untuk Pengajuan E-Sign</h2>

    <form action="{{ route('admin.e-sign.submitCompletionDetails', $eSignRequest->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Alasan Penyelesaian -->
        <div class="mb-6">
            <label for="reason" class="block text-sm font-medium text-gray-700">Alasan Penyelesaian</label>
            <textarea id="reason" name="reason" rows="4" class="mt-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('reason') border-red-500 @enderror">{{ old('reason') }}</textarea>
            @error('reason')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Lampiran Berkas -->
        <div class="mb-6">
            <label for="berkas_lampiran" class="block text-sm font-medium text-gray-700">Lampiran Berkas</label>
            <input type="file" id="berkas_lampiran" name="berkas_lampiran" class="mt-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('berkas_lampiran') border-red-500 @enderror">
            @error('berkas_lampiran')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transition duration-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Kirim Detail Penyelesaian</button>
        </div>
    </form>
</div>
@endsection
