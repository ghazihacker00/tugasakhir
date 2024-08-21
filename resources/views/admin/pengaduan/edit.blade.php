@extends('admin.layouts.master')

@section('title', 'Edit Pengaduan')

@section('content')
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Edit Pengaduan</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.pengaduan.update', $pengaduan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-bold mb-2">Nama</label>
                    <input type="text" name="nama" id="nama" value="{{ $pengaduan->nama }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="judul" class="block text-sm font-bold mb-2">Judul</label>
                    <input type="text" name="judul" id="judul" value="{{ $pengaduan->judul }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email" id="email" value="{{ $pengaduan->email }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="divisi" class="block text-sm font-bold mb-2">Divisi</label>
                    <input type="text" name="divisi" id="divisi" value="{{ $pengaduan->divisi }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="prioritas" class="block text-sm font-bold mb-2">Prioritas</label>
                    <select name="prioritas" id="prioritas" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="Low" {{ $pengaduan->prioritas == 'Low' ? 'selected' : '' }}>Low</option>
                        <option value="Medium" {{ $pengaduan->prioritas == 'Medium' ? 'selected' : '' }}>Medium</option>
                        <option value="High" {{ $pengaduan->prioritas == 'High' ? 'selected' : '' }}>High</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="layanan" class="block text-sm font-bold mb-2">Layanan</label>
                    <input type="text" name="layanan" id="layanan" value="{{ $pengaduan->layanan }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="telepon" class="block text-sm font-bold mb-2">No. Telepon / Whatsapp</label>
                    <input type="text" name="telepon" id="telepon" value="{{ $pengaduan->telepon }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="md:col-span-2 mb-4">
                    <label for="pesan" class="block text-sm font-bold mb-2">Pesan</label>
                    <textarea name="pesan" id="pesan" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $pengaduan->pesan }}</textarea>
                </div>
            </div>

            <div class="flex items-center justify-between mt-6">
                <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan Perubahan</button>
                <a href="{{ route('admin.pengaduan.index') }}" class="text-gray-500 hover:underline">Kembali</a>
            </div>
        </form>
    </div>
@endsection
