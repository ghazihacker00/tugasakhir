<!-- Header -->
<header class="bg-blue-600 shadow-md fixed top-0 left-0 w-full z-50" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo and Title -->
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <img src="/img/logo resmi/cimahi.png" alt="Logo Persandian Kota Cimahi" class="h-9 w-9 rounded-full bg-white p-1 mr-3">
                    <span class="text-lg font-semibold text-white">Persandian Kota Cimahi</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="/" class="text-white hover:text-gray-300 transition">Home</a>
                <div class="relative group" x-data="{ open: false }">
                    <button @click="open = !open" @click.away="open = false" class="text-white hover:text-gray-300 transition flex items-center focus:outline-none">
                        Profil <span class="ml-1">&#x25BC;</span>
                    </button>
                    <div x-show="open" x-transition class="absolute left-0 mt-2 bg-white rounded-md shadow-lg min-w-[200px] z-50">
                        <a href="/profil/tupoksi" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Tugas Pokok dan Fungsi</a>
                        <a href="/profil/program" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Program</a>
                        <a href="/profil/struktur-organisasi" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Struktur Organisasi</a>
                    </div>
                </div>
                <a href="/panduan" class="text-white hover:text-gray-300 transition">Panduan</a>
                <div class="relative group" x-data="{ open: false }">
                    <button @click="open = !open" @click.away="open = false" class="text-white hover:text-gray-300 transition flex items-center focus:outline-none">
                        Layanan <span class="ml-1">&#x25BC;</span>
                    </button>
                    <div x-show="open" x-transition class="absolute left-0 mt-2 bg-white rounded-md shadow-lg min-w-[200px] z-50">
                        <a href="/layanan/e-sign" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Pendaftaran TTE (E-Sign)</a>
                        <a href="/layanan/vulnerability-assessment" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Vulnerability Assessment (VA) / Pentest</a>
                        <a href="/layanan/e-mail" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Penerbitan E-mail</a>
                        <a href="/layanan/api-tte" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Integrasi API-TTE</a>
                    </div>
                </div>
                <a href="/pengaduan" class="text-white hover:text-gray-300 transition">Helpdesk</a>
                <a href="/cek-tiket" class="text-white hover:text-gray-300 transition">Cek Status Tiket</a>
            </nav>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button @click="open = !open" class="bg-blue-600 p-2 rounded-md text-white hover:text-gray-300 hover:bg-blue-700 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Navigation -->
    <div x-show="open" x-transition class="md:hidden bg-blue-800">
        <div class="px-4 pt-2 pb-3 space-y-1">
            <a href="/" class="block text-white py-2 px-3 rounded-md text-base font-medium hover:bg-blue-700">Home</a>
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" @click.away="open = false" class="block w-full text-left text-white py-2 px-3 rounded-md text-base font-medium hover:bg-blue-700 focus:outline-none">
                    Profil <span class="ml-2">&#x25BC;</span>
                </button>
                <div x-show="open" x-transition class="bg-blue-700 text-white rounded-md shadow-lg">
                    <a href="/profil/tupoksi" class="block px-4 py-2 hover:bg-blue-600">Tugas Pokok dan Fungsi</a>
                    <a href="/profil/program" class="block px-4 py-2 hover:bg-blue-600">Program</a>
                    <a href="/profil/struktur-organisasi" class="block px-4 py-2 hover:bg-blue-600">Struktur Organisasi</a>
                </div>
            </div>
            <a href="/panduan" class="block text-white py-2 px-3 rounded-md text-base font-medium hover:bg-blue-700">Panduan</a>
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" @click.away="open = false" class="block w-full text-left text-white py-2 px-3 rounded-md text-base font-medium hover:bg-blue-700 focus:outline-none">
                    Layanan <span class="ml-2">&#x25BC;</span>
                </button>
                <div x-show="open" x-transition class="bg-blue-700 text-white rounded-md shadow-lg">
                    <a href="/layanan/e-sign" class="block px-4 py-2 hover:bg-blue-600">Pendaftaran TTE (E-Sign)</a>
                    <a href="/layanan/vulnerability-assessment" class="block px-4 py-2 hover:bg-blue-600">Vulnerability Assessment (VA) / Pentest</a>
                    <a href="/layanan/e-mail" class="block px-4 py-2 hover:bg-blue-600">Penerbitan E-mail</a>
                    <a href="/layanan/api-tte" class="block px-4 py-2 hover:bg-blue-600">Integrasi API-TTE</a>
                </div>
            </div>
            <a href="/pengaduan" class="block text-white py-2 px-3 rounded-md text-base font-medium hover:bg-blue-700">Helpdesk</a>
            <a href="/cek-tiket" class="block text-white py-2 px-3 rounded-md text-base font-medium hover:bg-blue-700">Cek Status Tiket</a>
        </div>
    </div>
</header>

<!-- Content Offset -->
<div class="mt-16">
    @yield('content')
</div>

<!-- Alpine.js CDN -->
<script src="//cdn.jsdelivr.net/npm/alpinejs@3.4.2/dist/cdn.min.js"></script>
