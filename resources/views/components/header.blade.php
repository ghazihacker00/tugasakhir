<div class="bg-blue-600 shadow-md fixed top-0 left-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <div class="flex justify-start items-center">
                <div class="rounded-full bg-white p-2 mr-3">
                    <img src="/img/logo resmi/cimahi.png" alt="Logo Persandian Kota Cimahi" class="h-9 w-auto">
                </div>
                <a href="/" class="text-lg font-semibold text-white hover:text-gray-900">
                    Persandian Kota Cimahi
                </a>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button id="mobile-menu-button" class="bg-blue-600 inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-900 hover:bg-blue-700 focus:outline-none">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
            <nav class="hidden md:flex space-x-10">
                <a href="/" class="text-base font-medium text-white hover:text-gray-900">
                    Home
                </a>
                <div class="group relative">
                    <button class="flex items-center text-base font-medium text-white hover:text-gray-900 focus:outline-none">
                        Profil <span class="ml-1 text-xs">&#x25BC;</span>
                    </button>
                    <div class="hidden absolute left-0 bg-white rounded-md shadow-lg z-10 group-hover:block min-w-[200px]">
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
                    <div class="hidden absolute left-0 bg-white rounded-md shadow-lg z-10 group-hover:block min-w-[200px]">
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
                    Cek Status Tiket
                </a>
            </nav>
        </div>
    </div>
</div>

<!-- Mobile menu -->
<div id="mobile-menu" class="md:hidden">
    <div class="pt-2 pb-3 space-y-1">
        <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-900 hover:bg-blue-700">
            Home
        </a>
        <div class="relative group">
            <button class="w-full flex items-center justify-between px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-900 hover:bg-blue-700 focus:outline-none">
                Profil <span class="ml-2">&#x25BC;</span>
            </button>
            <div class="hidden group-hover:block bg-white rounded-md shadow-lg z-10">
                <a href="/profil/tupoksi" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100">Tugas Pokok dan Fungsi</a>
                <a href="/profil/program" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100">Program</a>
                <a href="/profil/struktur-organisasi" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100">Struktur Organisasi</a>
            </div>
        </div>
        <a href="/panduan" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-900 hover:bg-blue-700">
            Panduan
        </a>
        <div class="relative group">
            <button class="w-full flex items-center justify-between px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-900 hover:bg-blue-700 focus:outline-none">
                Layanan <span class="ml-2">&#x25BC;</span>
            </button>
            <div class="hidden group-hover:block bg-white rounded-md shadow-lg z-10">
                <a href="/layanan/e-sign" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100">Pendaftaran TTE (E-Sign)</a>
                <a href="/layanan/vulnerability-assessment" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100">Vulnerability Assessment (VA) / Pentest</a>
                <a href="/layanan/e-mail" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100">Penerbitan E-mail</a>
                <a href="/layanan/api-tte" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100">Integrasi API-TTE</a>
            </div>
        </div>
        <a href="/pengaduan" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-900 hover:bg-blue-700">
            Pengaduan
        </a>
        <a href="/cek-tiket" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-900 hover:bg-blue-700">
            Cek Status Tiket
        </a>
    </div>
</div>

<div class="mt-16">
    @yield('content')
</div>

<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
