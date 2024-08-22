@extends('admin.layouts.master')

@section('title', 'Detail Penyelesaian Pengajuan E-Mail')

@section('content')
<div class="bg-white shadow-lg rounded-xl p-8 max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Masukkan Detail Penyelesaian untuk Pengajuan E-Mail</h2>

    <form action="{{ route('admin.email.submitCompletionDetails', $emailRequest->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="reason" class="block text-sm font-medium text-gray-700">Alasan Penyelesaian</label>
            <textarea id="reason" name="reason" rows="4" class="mt-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500 focus:border-green-500 @error('reason') border-red-500 @enderror">{{ old('reason') }}</textarea>
            @error('reason')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="berkas_lampiran" class="block text-sm font-medium text-gray-700">Lampiran Berkas</label>
            <input type="file" id="berkas_lampiran" name="berkas_lampiran" class="mt-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500 focus:border-green-500 @error('berkas_lampiran') border-red-500 @enderror">
            @error('berkas_lampiran')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-300">Kirim Detail Penyelesaian</button>
        </div>
    </form>
</div>
@endsection
