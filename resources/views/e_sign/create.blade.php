<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengajuan E-Sign</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

@include('components.header')

<div class="flex justify-center items-center min-h-screen bg-gray-100 py-6 sm:py-12">
    <div class="relative w-full max-w-lg mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg"></div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-lg sm:p-10">
            <h2 class="text-2xl font-bold leading-tight text-center mb-4 text-gray-900">Formulir Pengajuan E-Sign</h2>
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            <form action="{{ route('e-sign.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="col-span-1 md:col-span-2">
                        <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap (sesuai KTP)</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('nama_lengkap') border-red-500 @enderror" value="{{ old('nama_lengkap') }}">
                        @error('nama_lengkap')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-1">
                        <label for="nik_nip" class="block text-sm font-medium text-gray-700">NIK/NIP</label>
                        <input type="text" name="nik_nip" id="nik_nip" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('nik_nip') border-red-500 @enderror" value="{{ old('nik_nip') }}">
                        @error('nik_nip')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-1">
                        <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('jabatan') border-red-500 @enderror" value="{{ old('jabatan') }}">
                        @error('jabatan')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-1">
                        <label for="pangkat_golongan_eselon" class="block text-sm font-medium text-gray-700">Pangkat/Golongan/Eselon</label>
                        <select name="pangkat_golongan_eselon" id="pangkat_golongan_eselon" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('pangkat_golongan_eselon') border-red-500 @enderror">
                            <option value="">Pilih Pangkat/Golongan/Eselon</option>
                            <!-- Tambahkan opsi sesuai kebutuhan -->
                            <option value="Juru Muda I/a" {{ old('pangkat_golongan_eselon') == 'Juru Muda I/a' ? 'selected' : '' }}>Juru Muda I/a</option>
                            <option value="Juru Muda Tingkat I I/b" {{ old('pangkat_golongan_eselon') == 'Juru Muda Tingkat I I/b' ? 'selected' : '' }}>Juru Muda Tingkat I I/b</option>
                            <!-- Lanjutkan opsi lainnya... -->
                        </select>
                        @error('pangkat_golongan_eselon')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-1">
                        <label for="dinas_unit_kerja" class="block text-sm font-medium text-gray-700">Dinas/Unit Kerja</label>
                        <select name="dinas_unit_kerja" id="dinas_unit_kerja" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('dinas_unit_kerja') border-red-500 @enderror">
                            <option value="">Pilih Dinas/Unit Kerja</option>
                            <!-- Tambahkan opsi sesuai kebutuhan -->
                            <option value="Sekretariat Daerah" {{ old('dinas_unit_kerja') == 'Sekretariat Daerah' ? 'selected' : '' }}>Sekretariat Daerah</option>
                            <option value="Sekretariat DPRD" {{ old('dinas_unit_kerja') == 'Sekretariat DPRD' ? 'selected' : '' }}>Sekretariat DPRD</option>
                            <!-- Lanjutkan opsi lainnya... -->
                        </select>
                        @error('dinas_unit_kerja')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-1">
                        <label for="instansi" class="block text-sm font-medium text-gray-700">Instansi</label>
                        <select name="instansi" id="instansi" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('instansi') border-red-500 @enderror">
                            <option value="Pemerintah Kota Cimahi" {{ old('instansi') == 'Pemerintah Kota Cimahi' ? 'selected' : '' }}>Pemerintah Kota Cimahi</option>
                        </select>
                        @error('instansi')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-1">
                        <label for="email_pemohon" class="block text-sm font-medium text-gray-700">Email Pemohon</label>
                        <input type="email" name="email_pemohon" id="email_pemohon" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('email_pemohon') border-red-500 @enderror" value="{{ old('email_pemohon') }}">
                        @error('email_pemohon')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <label for="telepon" class="block text-sm font-medium text-gray-700">No. Telepon/Whatsapp</label>
                        <input type="text" name="telepon" id="telepon" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('telepon') border-red-500 @enderror" value="{{ old('telepon') }}">
                        @error('telepon')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('alamat') border-red-500 @enderror">{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <label for="surat_permohonan" class="block text-sm font-medium text-gray-700">Upload Surat Permohonan</label>
                        <label class="block">
                            <span class="sr-only">Choose File</span>
                            <input type="file" name="surat_permohonan" id="surat_permohonan" class="block w-full text-sm text-gray-500
                            file:mr-4 file:py-2 file:px-4
                            file:rounded-full file:border-0
                            file:text-sm file:font-semibold
                            file:bg-blue-50 file:text-blue-700
                            hover:file:bg-blue-100
                            @error('surat_permohonan') border-red-500 @enderror">
                        </label>
                        @error('surat_permohonan')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center justify-between mt-6">
                    <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Kirim Pengajuan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('components.footer')

<!-- Alpine.js CDN -->
<script src="//cdn.jsdelivr.net/npm/alpinejs@3.4.2/dist/cdn.min.js"></script>
</body>
</html>
