@extends('admin.layouts.master')

@section('title', 'Edit Pengajuan Email Request')

@section('content')
<div class="bg-white shadow-lg rounded-lg p-8 max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Edit Pengajuan Email Request</h2>

    @if ($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6">
            <span class="block sm:inline">{{ $errors->first() }}</span>
        </div>
    @endif

    <form action="{{ route('admin.email.update', $emailRequest->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="mb-4">
                <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ $emailRequest->nama_lengkap }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('nama_lengkap') border-red-500 @enderror">
                @error('nama_lengkap')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="nik_nip" class="block text-sm font-medium text-gray-700">NIK/NIP</label>
                <input type="text" name="nik_nip" id="nik_nip" value="{{ $emailRequest->nik_nip }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('nik_nip') border-red-500 @enderror">
                @error('nik_nip')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" value="{{ $emailRequest->jabatan }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('jabatan') border-red-500 @enderror">
                @error('jabatan')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="pangkat_golongan_eselon" class="block text-sm font-medium text-gray-700">Pangkat/Golongan/Eselon</label>
                <input type="text" name="pangkat_golongan_eselon" id="pangkat_golongan_eselon" value="{{ $emailRequest->pangkat_golongan_eselon }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('pangkat_golongan_eselon') border-red-500 @enderror">
                @error('pangkat_golongan_eselon')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="dinas_unit_kerja" class="block text-sm font-medium text-gray-700">Dinas/Unit Kerja</label>
                <input type="text" name="dinas_unit_kerja" id="dinas_unit_kerja" value="{{ $emailRequest->dinas_unit_kerja }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('dinas_unit_kerja') border-red-500 @enderror">
                @error('dinas_unit_kerja')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="instansi" class="block text-sm font-medium text-gray-700">Instansi</label>
                <input type="text" name="instansi" id="instansi" value="{{ $emailRequest->instansi }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('instansi') border-red-500 @enderror">
                @error('instansi')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email_pemohon" class="block text-sm font-medium text-gray-700">Email Pemohon</label>
                <input type="email" name="email_pemohon" id="email_pemohon" value="{{ $emailRequest->email_pemohon }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('email_pemohon') border-red-500 @enderror">
                @error('email_pemohon')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="telepon" class="block text-sm font-medium text-gray-700">No. Telepon</label>
                <input type="text" name="telepon" id="telepon" value="{{ $emailRequest->telepon }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('telepon') border-red-500 @enderror">
                @error('telepon')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2 mb-4">
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('alamat') border-red-500 @enderror">{{ $emailRequest->alamat }}</textarea>
                @error('alamat')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2 mb-4">
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="new" {{ $emailRequest->status == 'new' ? 'selected' : '' }}>Baru</option>
                    <option value="in_progress" {{ $emailRequest->status == 'in_progress' ? 'selected' : '' }}>Dalam Proses</option>
                    <option value="completed" {{ $emailRequest->status == 'completed' ? 'selected' : '' }}>Selesai</option>
                </select>
            </div>
        </div>

        <div class="flex items-center justify-between mt-6">
            <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 transition duration-300">Simpan Perubahan</button>
            <a href="{{ route('admin.email.index') }}" class="text-gray-500 hover:text-gray-700 transition duration-300">Kembali</a>
        </div>
    </form>
</div>
@endsection
