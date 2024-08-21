<div class="bg-blue-600 shadow-md fixed top-0 left-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1 items-center">
                <div class="rounded-full bg-white p-2 mr-3">
                    <img src="/img/logo resmi/cimahi.png" alt="Logo Persandian Kota Cimahi" class="h-9 w-auto">
                </div>
                <a href="/" class="text-lg font-semibold text-white hover:text-gray-900">
                    Persandian Kota Cimahi
                </a>
            </div>
            <nav class="hidden md:flex space-x-10 relative">
                <a href="/" class="text-base font-medium text-white hover:text-gray-900">
                    Home
                </a>
                <div class="group relative">
                    <button class="flex items-center text-base font-medium text-white hover:text-gray-900 focus:outline-none">
                        Profil <span class="ml-1 text-xs">&#x25BC;</span>
                    </button>
                    <div class="hidden absolute left-0 bg-white rounded-md shadow-lg z-10 group-hover:block min-w-[200px]"> <!-- Menambahkan min-width -->
                        <a href="/profil/tupoksi" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100 whitespace-nowrap">Tugas Pokok dan Fungsi</a>
                        <a href="/profil/program" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100 whitespace-nowrap">Program</a>
                        <a href="/profil/struktur-organisasi" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100 whitespace-nowrap">Struktur Organisasi</a>
                    </div>
                </div>
                <a href="/panduan" class="text-base font-medium text-white hover:text-gray-900">
                    Panduan
                </a>
                <div class="group relative">
                    <button class="flex items-center text-base font-medium text-white hover:text-gray-900 focus:outline-none">
                        Layanan <span class="ml-1 text-xs">&#x25BC;</span>
                    </button>
                    <div class="hidden absolute left-0 bg-white rounded-md shadow-lg z-10 group-hover:block min-w-[200px]"> <!-- Menambahkan min-width -->
                        <a href="/layanan/e-sign" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100 whitespace-nowrap">Pendaftaran TTE (E-Sign)</a>
                        <a href="/layanan/vulnerability-assessment" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100 whitespace-nowrap">Vulnerability Assessment (VA) / Pentest</a>
                        <a href="/layanan/e-mail" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100 whitespace-nowrap">Penerbitan E-mail</a>
                        <a href="/layanan/api-tte" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100 whitespace-nowrap">Integrasi API-TTE</a>
                    </div>
                </div>
                <a href="/pengaduan" class="text-base font-medium text-white hover:text-gray-900">
                    Pengaduan
                </a>
                <a href="/cek-tiket" class="text-base font-medium text-white hover:text-gray-900">
                    cek status tiket
                </a>
            </nav>
        </div>
    </div>
</div>
<div class="mt-16"> <!-- Beri margin atas agar tidak tertutup header -->
    @yield('content')
</div>