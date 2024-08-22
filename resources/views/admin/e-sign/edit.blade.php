@extends('admin.layouts.master')

@section('title', 'Edit Pengajuan E-Sign')

@section('content')
<div class="bg-white shadow-lg rounded-lg p-8 max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Edit Pengajuan E-Sign</h2>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6">
            <span>{{ $errors->first() }}</span>
        </div>
    @endif

    <form action="{{ route('admin.e-sign.update', $eSignRequest->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ $eSignRequest->nama_lengkap }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="nik_nip" class="block text-sm font-medium text-gray-700">NIK/NIP</label>
                <input type="text" name="nik_nip" id="nik_nip" value="{{ $eSignRequest->nik_nip }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" value="{{ $eSignRequest->jabatan }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="pangkat_golongan_eselon" class="block text-sm font-medium text-gray-700">Pangkat/Golongan/Eselon</label>
                <input type="text" name="pangkat_golongan_eselon" id="pangkat_golongan_eselon" value="{{ $eSignRequest->pangkat_golongan_eselon }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="dinas_unit_kerja" class="block text-sm font-medium text-gray-700">Dinas/Unit Kerja</label>
                <input type="text" name="dinas_unit_kerja" id="dinas_unit_kerja" value="{{ $eSignRequest->dinas_unit_kerja }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="instansi" class="block text-sm font-medium text-gray-700">Instansi</label>
                <input type="text" name="instansi" id="instansi" value="{{ $eSignRequest->instansi }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="email_pemohon" class="block text-sm font-medium text-gray-700">Email Pemohon</label>
                <input type="email" name="email_pemohon" id="email_pemohon" value="{{ $eSignRequest->email_pemohon }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="telepon" class="block text-sm font-medium text-gray-700">No. Telepon</label>
                <input type="text" name="telepon" id="telepon" value="{{ $eSignRequest->telepon }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="md:col-span-2">
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ $eSignRequest->alamat }}</textarea>
            </div>

            <div class="md:col-span-2">
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="new" {{ $eSignRequest->status == 'new' ? 'selected' : '' }}>Baru</option>
                    <option value="in_progress" {{ $eSignRequest->status == 'in_progress' ? 'selected' : '' }}>Dalam Proses</option>
                    <option value="completed" {{ $eSignRequest->status == 'completed' ? 'selected' : '' }}>Selesai</option>
                </select>
            </div>
        </div>

        <div class="flex items-center justify-between mt-6">
            <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 transition duration-300">Simpan Perubahan</button>
            <a href="{{ route('admin.e-sign.index') }}" class="text-gray-500 hover:text-gray-700 hover:underline transition duration-300">Kembali</a>
        </div>
    </form>
</div>
@endsection
