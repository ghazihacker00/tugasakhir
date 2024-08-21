@extends('admin.layouts.master')

@section('title', 'Edit Pengajuan Email Request')

@section('content')
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Edit Pengajuan Email Request</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <span class="block sm:inline">{{ $errors->first() }}</span>
            </div>
        @endif

        <form action="{{ route('admin.email.update', $emailRequest->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="mb-4">
                    <label for="nama_lengkap" class="block text-sm font-bold mb-2">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ $emailRequest->nama_lengkap }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="nik_nip" class="block text-sm font-bold mb-2">NIK/NIP</label>
                    <input type="text" name="nik_nip" id="nik_nip" value="{{ $emailRequest->nik_nip }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="jabatan" class="block text-sm font-bold mb-2">Jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" value="{{ $emailRequest->jabatan }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="pangkat_golongan_eselon" class="block text-sm font-bold mb-2">Pangkat/Golongan/Eselon</label>
                    <input type="text" name="pangkat_golongan_eselon" id="pangkat_golongan_eselon" value="{{ $emailRequest->pangkat_golongan_eselon }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="dinas_unit_kerja" class="block text-sm font-bold mb-2">Dinas/Unit Kerja</label>
                    <input type="text" name="dinas_unit_kerja" id="dinas_unit_kerja" value="{{ $emailRequest->dinas_unit_kerja }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="instansi" class="block text-sm font-bold mb-2">Instansi</label>
                    <input type="text" name="instansi" id="instansi" value="{{ $emailRequest->instansi }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="email_pemohon" class="block text-sm font-bold mb-2">Email Pemohon</label>
                    <input type="email" name="email_pemohon" id="email_pemohon" value="{{ $emailRequest->email_pemohon }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="telepon" class="block text-sm font-bold mb-2">No. Telepon</label>
                    <input type="text" name="telepon" id="telepon" value="{{ $emailRequest->telepon }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="md:col-span-2 mb-4">
                    <label for="alamat" class="block text-sm font-bold mb-2">Alamat</label>
                    <textarea name="alamat" id="alamat" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $emailRequest->alamat }}</textarea>
                </div>

                <div class="md:col-span-2 mb-4">
                    <label for="status" class="block text-sm font-bold mb-2">Status</label>
                    <select name="status" id="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="new" {{ $emailRequest->status == 'new' ? 'selected' : '' }}>Baru</option>
                        <option value="in_progress" {{ $emailRequest->status == 'in_progress' ? 'selected' : '' }}>Dalam Proses</option>
                        <option value="completed" {{ $emailRequest->status == 'completed' ? 'selected' : '' }}>Selesai</option>
                    </select>
                </div>
            </div>

            <div class="flex items-center justify-between mt-6">
                <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan Perubahan</button>
                <a href="{{ route('admin.email.index') }}" class="text-gray-500 hover:underline">Kembali</a>
            </div>
        </form>
    </div>
@endsection
