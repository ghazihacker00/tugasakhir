<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpdesk</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

@include('components.header')

<div class="flex justify-center items-center min-h-screen bg-gray-100 py-6 sm:py-12">
    <div class="relative w-full max-w-lg mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg"></div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-lg sm:p-10">
            <h2 class="text-3xl font-bold leading-tight text-center mb-4 text-gray-900">Helpdesk</h2>
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div>
                    <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                    <input type="text" name="judul" id="judul" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('judul') border-red-500 @enderror" value="{{ old('judul') }}">
                    @error('judul')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" name="nama" id="nama" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('nama') border-red-500 @enderror" value="{{ old('nama') }}">
                        @error('nama')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="divisi" class="block text-sm font-medium text-gray-700">Divisi</label>
                        <select name="divisi" id="divisi" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('divisi') border-red-500 @enderror">
                            <option value="">Pilih Divisi</option>
                            <option value="Divisi A" {{ old('divisi') == 'Divisi A' ? 'selected' : '' }}>Divisi A</option>
                            <option value="Divisi B" {{ old('divisi') == 'Divisi B' ? 'selected' : '' }}>Divisi B</option>
                        </select>
                        @error('divisi')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="prioritas" class="block text-sm font-medium text-gray-700">Prioritas</label>
                        <select name="prioritas" id="prioritas" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('prioritas') border-red-500 @enderror">
                            <option value="">Pilih Prioritas</option>
                            <option value="Tinggi" {{ old('prioritas') == 'Tinggi' ? 'selected' : '' }}>Tinggi</option>
                            <option value="Sedang" {{ old('prioritas') == 'Sedang' ? 'selected' : '' }}>Sedang</option>
                            <option value="Rendah" {{ old('prioritas') == 'Rendah' ? 'selected' : '' }}>Rendah</option>
                        </select>
                        @error('prioritas')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="layanan" class="block text-sm font-medium text-gray-700">Layanan</label>
                        <select name="layanan" id="layanan" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('layanan') border-red-500 @enderror">
                            <option value="">Pilih Layanan</option>
                            <option value="Layanan A" {{ old('layanan') == 'Layanan A' ? 'selected' : '' }}>Layanan A</option>
                            <option value="Layanan B" {{ old('layanan') == 'Layanan B' ? 'selected' : '' }}>Layanan B</option>
                        </select>
                        @error('layanan')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="telepon" class="block text-sm font-medium text-gray-700">No. Telepon / Whatsapp</label>
                        <input type="text" name="telepon" id="telepon" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('telepon') border-red-500 @enderror" value="{{ old('telepon') }}">
                        @error('telepon')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="pesan" class="block text-sm font-medium text-gray-700">Pesan</label>
                    <textarea name="pesan" id="pesan" rows="4" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('pesan') border-red-500 @enderror">{{ old('pesan') }}</textarea>
                    @error('pesan')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="lampiran" class="block text-sm font-medium text-gray-700">Lampiran</label>
                    <label class="block">
                        <span class="sr-only">Choose File</span>
                        <input type="file" name="lampiran" id="lampiran" class="block w-full text-sm text-gray-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-blue-50 file:text-blue-700
                        hover:file:bg-blue-100
                        @error('lampiran') border-red-500 @enderror">
                    </label>
                    @error('lampiran')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Kirim Pengaduan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('components.footer')

</body>
</html>
