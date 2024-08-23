<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengajuan API TTE</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

@include('components.header')

<div class="flex justify-center items-center min-h-screen bg-gray-100 py-6 sm:py-12">
    <div class="relative w-full max-w-lg mx-auto">
        <!-- Background element -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg"></div>
        
        <!-- Form container -->
        <div class="relative px-6 py-12 bg-white shadow-lg rounded-xl sm:rounded-lg sm:p-10">
            <h2 class="text-3xl font-bold leading-tight text-center mb-6 text-gray-900">Formulir Pengajuan API TTE</h2>
            <form action="{{ route('api-tte.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Nama Lengkap -->
                    <div class="col-span-1 md:col-span-2">
                        <label for="nama_lengkap" class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap (sesuai KTP)</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="mt-1 block w-full px-4 py-3 border border-gray-300 shadow-sm sm:text-sm rounded-lg placeholder-gray-400 focus:border-gray-300 focus:ring-0 @error('nama_lengkap') border-red-500 @enderror" value="{{ old('nama_lengkap') }}">
                        @error('nama_lengkap')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- NIK/NIP -->
                    <div class="col-span-1">
                        <label for="nik_nip" class="block text-sm font-semibold text-gray-700 mb-1">NIK/NIP</label>
                        <input type="text" name="nik_nip" id="nik_nip" class="mt-1 block w-full px-4 py-3 border border-gray-300 shadow-sm sm:text-sm rounded-lg placeholder-gray-400 focus:border-gray-300 focus:ring-0 @error('nik_nip') border-red-500 @enderror" value="{{ old('nik_nip') }}">
                        @error('nik_nip')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Jabatan -->
                    <div class="col-span-1">
                        <label for="jabatan" class="block text-sm font-semibold text-gray-700 mb-1">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" class="mt-1 block w-full px-4 py-3 border border-gray-300 shadow-sm sm:text-sm rounded-lg placeholder-gray-400 focus:border-gray-300 focus:ring-0 @error('jabatan') border-red-500 @enderror" value="{{ old('jabatan') }}">
                        @error('jabatan')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Pangkat/Golongan/Eselon -->
                    <div class="col-span-1">
                        <label for="pangkat_golongan_eselon" class="block text-sm font-semibold text-gray-700 mb-1">Pangkat/Golongan/Eselon</label>
                        <select name="pangkat_golongan_eselon" id="pangkat_golongan_eselon" class="mt-1 block w-full px-4 py-3 border border-gray-300 shadow-sm sm:text-sm rounded-lg placeholder-gray-400 focus:border-gray-300 focus:ring-0 @error('pangkat_golongan_eselon') border-red-500 @enderror">
                            <option value="">Pilih Pangkat/Golongan/Eselon</option>
                            <option value="Juru Muda I/a" {{ old('pangkat_golongan_eselon') == 'Juru Muda I/a' ? 'selected' : '' }}>Juru Muda I/a</option>
                            <option value="Juru Muda Tingkat I I/b" {{ old('pangkat_golongan_eselon') == 'Juru Muda Tingkat I I/b' ? 'selected' : '' }}>Juru Muda Tingkat I I/b</option>
                            <option value="Juru I/c" {{ old('pangkat_golongan_eselon') == 'Juru I/c' ? 'selected' : '' }}>Juru I/c</option>
                            <option value="Juru Tingkat I I/d" {{ old('pangkat_golongan_eselon') == 'Juru Tingkat I I/d' ? 'selected' : '' }}>Juru Tingkat I I/d</option>
                            <option value="Pengatur Muda II/a" {{ old('pangkat_golongan_eselon') == 'Pengatur Muda II/a' ? 'selected' : '' }}>Pengatur Muda II/a</option>
                            <option value="Pengatur Muda Tingkat I II/b" {{ old('pangkat_golongan_eselon') == 'Pengatur Muda Tingkat I II/b' ? 'selected' : '' }}>Pengatur Muda Tingkat I II/b</option>
                            <option value="Pengatur II/c" {{ old('pangkat_golongan_eselon') == 'Pengatur II/c' ? 'selected' : '' }}>Pengatur II/c</option>
                            <option value="Pengatur Tingkat I II/d" {{ old('pangkat_golongan_eselon') == 'Pengatur Tingkat I II/d' ? 'selected' : '' }}>Pengatur Tingkat I II/d</option>
                            <option value="Penata Muda III/a" {{ old('pangkat_golongan_eselon') == 'Penata Muda III/a' ? 'selected' : '' }}>Penata Muda III/a</option>
                            <option value="Penata Muda Tingkat I III/b" {{ old('pangkat_golongan_eselon') == 'Penata Muda Tingkat I III/b' ? 'selected' : '' }}>Penata Muda Tingkat I III/b</option>
                            <option value="Penata III/c" {{ old('pangkat_golongan_eselon') == 'Penata III/c' ? 'selected' : '' }}>Penata III/c</option>
                            <option value="Penata Tingkat I III/d" {{ old('pangkat_golongan_eselon') == 'Penata Tingkat I III/d' ? 'selected' : '' }}>Penata Tingkat I III/d</option>
                            <option value="Pembina IV/a" {{ old('pangkat_golongan_eselon') == 'Pembina IV/a' ? 'selected' : '' }}>Pembina IV/a</option>
                            <option value="Pembina Tingkat I IV/b" {{ old('pangkat_golongan_eselon') == 'Pembina Tingkat I IV/b' ? 'selected' : '' }}>Pembina Tingkat I IV/b</option>
                            <option value="Pembina Utama Muda IV/c" {{ old('pangkat_golongan_eselon') == 'Pembina Utama Muda IV/c' ? 'selected' : '' }}>Pembina Utama Muda IV/c</option>
                            <option value="Pembina Utama Madya IV/d" {{ old('pangkat_golongan_eselon') == 'Pembina Utama Madya IV/d' ? 'selected' : '' }}>Pembina Utama Madya IV/d</option>
                            <option value="Pembina Utama IV/e" {{ old('pangkat_golongan_eselon') == 'Pembina Utama IV/e' ? 'selected' : '' }}>Pembina Utama IV/e</option>
                            <option value="lainnya" {{ old('pangkat_golongan_eselon') == 'lainnya' ? 'selected' : '' }}>lainnya</option>
                        </select>
                        @error('pangkat_golongan_eselon')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Dinas/Unit Kerja -->
                    <div class="col-span-1">
                        <label for="dinas_unit_kerja" class="block text-sm font-semibold text-gray-700 mb-1">Dinas/Unit Kerja</label>
                        <select name="dinas_unit_kerja" id="dinas_unit_kerja" class="mt-1 block w-full px-4 py-3 border border-gray-300 shadow-sm sm:text-sm rounded-lg placeholder-gray-400 focus:border-gray-300 focus:ring-0 @error('dinas_unit_kerja') border-red-500 @enderror">
                            <option value="">Pilih Dinas/Unit Kerja</option>
                            <option value="Sekretariat Daerah" {{ old('dinas_unit_kerja') == 'Sekretariat Daerah' ? 'selected' : '' }}>Sekretariat Daerah</option>
                            <option value="Sekretariat DPRD" {{ old('dinas_unit_kerja') == 'Sekretariat DPRD' ? 'selected' : '' }}>Sekretariat DPRD</option>
                            <option value="Inspektorat" {{ old('dinas_unit_kerja') == 'Inspektorat' ? 'selected' : '' }}>Inspektorat</option>
                            <option value="Dinas Pendidikan" {{ old('dinas_unit_kerja') == 'Dinas Pendidikan' ? 'selected' : '' }}>Dinas Pendidikan</option>
                            <option value="Dinas Kesehatan" {{ old('dinas_unit_kerja') == 'Dinas Kesehatan' ? 'selected' : '' }}>Dinas Kesehatan</option>
                            <option value="Dinas Pekerjaan Umum dan Penataan Ruang" {{ old('dinas_unit_kerja') == 'Dinas Pekerjaan Umum dan Penataan Ruang' ? 'selected' : '' }}>Dinas Pekerjaan Umum dan Penataan Ruang</option>
                            <option value="Dinas Perumahan dan Kawasan Permukiman" {{ old('dinas_unit_kerja') == 'Dinas Perumahan dan Kawasan Permukiman' ? 'selected' : '' }}>Dinas Perumahan dan Kawasan Permukiman</option>
                            <option value="Satuan Polisi Pamong Praja dan Pemadam Kebakaran" {{ old('dinas_unit_kerja') == 'Satuan Polisi Pamong Praja dan Pemadam Kebakaran' ? 'selected' : '' }}>Satuan Polisi Pamong Praja dan Pemadam Kebakaran</option>
                            <option value="Dinas Sosial" {{ old('dinas_unit_kerja') == 'Dinas Sosial' ? 'selected' : '' }}>Dinas Sosial</option>
                            <option value="Dinas Pemberdayaan Perempuan dan Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana" {{ old('dinas_unit_kerja') == 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana' ? 'selected' : '' }}>Dinas Pemberdayaan Perempuan dan Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana</option>
                            <option value="Dinas Perdagangan, Koperasi, Usaha Kecil dan Menengah, dan Perindustrian" {{ old('dinas_unit_kerja') == 'Dinas Perdagangan, Koperasi, Usaha Kecil dan Menengah, dan Perindustrian' ? 'selected' : '' }}>Dinas Perdagangan, Koperasi, Usaha Kecil dan Menengah, dan Perindustrian</option>
                            <option value="Dinas Perhubungan" {{ old('dinas_unit_kerja') == 'Dinas Perhubungan' ? 'selected' : '' }}>Dinas Perhubungan</option>
                            <option value="Dinas Kependudukan dan Pencatatan Sipil" {{ old('dinas_unit_kerja') == 'Dinas Kependudukan dan Pencatatan Sipil' ? 'selected' : '' }}>Dinas Kependudukan dan Pencatatan Sipil</option>
                            <option value="Dinas Tenaga Kerja" {{ old('dinas_unit_kerja') == 'Dinas Tenaga Kerja' ? 'selected' : '' }}>Dinas Tenaga Kerja</option>
                            <option value="Dinas Pangan dan Pertanian" {{ old('dinas_unit_kerja') == 'Dinas Pangan dan Pertanian' ? 'selected' : '' }}>Dinas Pangan dan Pertanian</option>
                            <option value="Dinas Kebudayaan, Pariwisata, Kepemudaan dan Olahraga" {{ old('dinas_unit_kerja') == 'Dinas Kebudayaan, Pariwisata, Kepemudaan dan Olahraga' ? 'selected' : '' }}>Dinas Kebudayaan, Pariwisata, Kepemudaan dan Olahraga</option>
                            <option value="Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu" {{ old('dinas_unit_kerja') == 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu' ? 'selected' : '' }}>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</option>
                            <option value="Dinas Lingkungan Hidup" {{ old('dinas_unit_kerja') == 'Dinas Lingkungan Hidup' ? 'selected' : '' }}>Dinas Lingkungan Hidup</option>
                            <option value="Dinas Komunikasi dan Informatika" {{ old('dinas_unit_kerja') == 'Dinas Komunikasi dan Informatika' ? 'selected' : '' }}>Dinas Komunikasi dan Informatika</option>
                            <option value="Dinas Arsip Daerah" {{ old('dinas_unit_kerja') == 'Dinas Arsip Daerah' ? 'selected' : '' }}>Dinas Arsip Daerah</option>
                            <option value="lainnya" {{ old('dinas_unit_kerja') == 'lainnya' ? 'selected' : '' }}>lainnya</option>
                        </select>
                        @error('dinas_unit_kerja')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Instansi -->
                    <div class="col-span-1">
                        <label for="instansi" class="block text-sm font-semibold text-gray-700 mb-1">Instansi</label>
                        <select name="instansi" id="instansi" class="mt-1 block w-full px-4 py-3 border border-gray-300 shadow-sm sm:text-sm rounded-lg placeholder-gray-400 focus:border-gray-300 focus:ring-0 @error('instansi') border-red-500 @enderror">
                            <option value="Pemerintah Kota Cimahi" {{ old('instansi') == 'Pemerintah Kota Cimahi' ? 'selected' : '' }}>Pemerintah Kota Cimahi</option>
                        </select>
                        @error('instansi')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Email Pemohon -->
                    <div class="col-span-1">
                        <label for="email_pemohon" class="block text-sm font-semibold text-gray-700 mb-1">Email Pemohon</label>
                        <input type="email" name="email_pemohon" id="email_pemohon" class="mt-1 block w-full px-4 py-3 border border-gray-300 shadow-sm sm:text-sm rounded-lg placeholder-gray-400 focus:border-gray-300 focus:ring-0 @error('email_pemohon') border-red-500 @enderror" value="{{ old('email_pemohon') }}">
                        @error('email_pemohon')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- No. Telepon/Whatsapp -->
                    <div class="col-span-1 md:col-span-2">
                        <label for="telepon" class="block text-sm font-semibold text-gray-700 mb-1">No. Telepon/Whatsapp</label>
                        <input type="text" name="telepon" id="telepon" class="mt-1 block w-full px-4 py-3 border border-gray-300 shadow-sm sm:text-sm rounded-lg placeholder-gray-400 focus:border-gray-300 focus:ring-0 @error('telepon') border-red-500 @enderror" value="{{ old('telepon') }}">
                        @error('telepon')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Alamat -->
                    <div class="col-span-1 md:col-span-2">
                        <label for="alamat" class="block text-sm font-semibold text-gray-700 mb-1">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="mt-1 block w-full px-4 py-3 border border-gray-300 shadow-sm sm:text-sm rounded-lg placeholder-gray-400 focus:border-gray-300 focus:ring-0 @error('alamat') border-red-500 @enderror">{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Upload Surat Permohonan -->
                    <div class="col-span-1 md:col-span-2">
                        <label for="surat_permohonan" class="block text-sm font-semibold text-gray-700 mb-1">Upload Surat Permohonan</label>
                        <label class="block">
                            <span class="sr-only">Choose File</span>
                            <input type="file" name="surat_permohonan" id="surat_permohonan" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 @error('surat_permohonan') border-red-500 @enderror">
                        </label>
                        @error('surat_permohonan')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <!-- Submit Button -->
                <div class="flex items-center justify-between mt-6">
                    <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 px-5 rounded-lg focus:outline-none focus:shadow-outline">Kirim Pengajuan</button>
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
