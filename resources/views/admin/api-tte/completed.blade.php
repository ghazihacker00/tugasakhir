@extends('admin.layouts.master')

@section('title', 'Detail Penyelesaian Pengajuan API TTE')

@section('content')
<div class="bg-gray-100 shadow-lg rounded-xl p-8">
    <h2 class="text-3xl font-bold mb-6">Masukkan Detail Penyelesaian untuk Pengajuan API TTE</h2>

    <form action="{{ route('admin.api-tte.submitCompletionDetails', $apiTTERequest->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="reason" class="block text-sm font-medium text-gray-700">Alasan Penyelesaian</label>
            <textarea id="reason" name="reason" rows="4" class="mt-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md @error('reason') border-red-500 @enderror">{{ old('reason') }}</textarea>
            @error('reason')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="berkas_lampiran" class="block text-sm font-medium text-gray-700">Lampiran Berkas</label>
            <input type="file" id="berkas_lampiran" name="berkas_lampiran" class="mt-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md @error('berkas_lampiran') border-red-500 @enderror">
            @error('berkas_lampiran')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Kirim Detail Penyelesaian</button>
        </div>
    </form>
</div>
@endsection
