@extends('admin.layouts.master')

@section('title', 'Edit Pengaduan')

@section('content')
    <div class="bg-white shadow-lg rounded-xl p-8">
        <h2 class="text-3xl font-bold mb-6">Edit Pengaduan</h2>

        @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6">
                <ul class="list-disc pl-5 space-y-1">
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
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" name="nama" id="nama" value="{{ $pengaduan->nama }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-emerald-500 focus:border-emerald-500">
                </div>

                <div class="mb-4">
                    <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                    <input type="text" name="judul" id="judul" value="{{ $pengaduan->judul }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-emerald-500 focus:border-emerald-500">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ $pengaduan->email }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-emerald-500 focus:border-emerald-500">
                </div>

                <div class="mb-4">
                    <label for="divisi" class="block text-sm font-medium text-gray-700">Divisi</label>
                    <input type="text" name="divisi" id="divisi" value="{{ $pengaduan->divisi }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-emerald-500 focus:border-emerald-500">
                </div>

                <div class="mb-4">
                    <label for="prioritas" class="block text-sm font-medium text-gray-700">Prioritas</label>
                    <select name="prioritas" id="prioritas" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-emerald-500 focus:border-emerald-500">
                        <option value="Low" {{ $pengaduan->prioritas == 'Low' ? 'selected' : '' }}>Low</option>
                        <option value="Medium" {{ $pengaduan->prioritas == 'Medium' ? 'selected' : '' }}>Medium</option>
                        <option value="High" {{ $pengaduan->prioritas == 'High' ? 'selected' : '' }}>High</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="layanan" class="block text-sm font-medium text-gray-700">Layanan</label>
                    <input type="text" name="layanan" id="layanan" value="{{ $pengaduan->layanan }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-emerald-500 focus:border-emerald-500">
                </div>

                <div class="mb-4">
                    <label for="telepon" class="block text-sm font-medium text-gray-700">No. Telepon / Whatsapp</label>
                    <input type="text" name="telepon" id="telepon" value="{{ $pengaduan->telepon }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-emerald-500 focus:border-emerald-500">
                </div>

                <div class="md:col-span-2 mb-4">
                    <label for="pesan" class="block text-sm font-medium text-gray-700">Pesan</label>
                    <textarea name="pesan" id="pesan" rows="4" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-emerald-500 focus:border-emerald-500">{{ $pengaduan->pesan }}</textarea>
                </div>
            </div>

            <div class="flex items-center justify-between mt-6">
                <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline transition duration-300 ease-in-out">Simpan Perubahan</button>
                <a href="{{ route('admin.pengaduan.index') }}" class="text-gray-500 hover:underline">Kembali</a>
            </div>
        </form>
    </div>
@endsection
