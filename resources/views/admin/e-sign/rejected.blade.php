@extends('admin.layouts.master')

@section('title', 'Alasan Penolakan Pengajuan E-Sign')

@section('content')
<div class="bg-white shadow-lg rounded-xl p-8 max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Masukkan Alasan Penolakan untuk Pengajuan E-Sign</h2>

    <form action="{{ route('admin.e-sign.submitRejectionReason', $eSignRequest->id) }}" method="POST">
        @csrf
        <div class="mb-6">
            <label for="reason" class="block text-sm font-medium text-gray-700">Alasan Penolakan</label>
            <textarea id="reason" name="reason" rows="4" class="mt-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md focus:ring-2 focus:ring-red-500 focus:border-red-500 @error('reason') border-red-500 @enderror">{{ old('reason') }}</textarea>
            @error('reason')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-300">Kirim Alasan</button>
        </div>
    </form>
</div>
@endsection
