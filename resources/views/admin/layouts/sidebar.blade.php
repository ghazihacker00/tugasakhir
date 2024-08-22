<!-- resources/views/admin/layouts/sidebar.blade.php -->
<aside x-data="{ open: false }" class="w-full sm:w-64 bg-gray-900 text-white flex flex-col min-h-screen">
    <!-- Mobile Menu Toggle Button -->
    <div class="sm:hidden flex justify-between items-center p-4">
        <span class="text-lg font-bold">MENU</span>
        <button @click="open = !open" class="text-gray-200 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <!-- Menu Section -->
    <nav :class="{ 'hidden': !open, 'block': open }" class="flex-grow sm:block">
        <div class="px-6 py-4 text-lg font-bold hidden sm:block">
            <center>MENU</center>
        </div>
        <ul class="space-y-2 px-4">
            <li>
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-2 text-gray-200 hover:bg-gray-800 rounded-lg transition duration-200 ease-in-out transform hover:scale-105">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18m-6 0l-6-6m0 0l-6 6m6-6v12"></path>
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('admin.e-sign.index') }}" class="flex items-center px-4 py-2 text-gray-200 hover:bg-gray-800 rounded-lg transition duration-200 ease-in-out transform hover:scale-105">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6m0 6a9 9 0 100-18 9 9 0 000 18z"></path>
                    </svg>
                    Kelola E-Sign
                </a>
            </li>
            <li>
                <a href="{{ route('admin.vulnerability-assessment.index') }}" class="flex items-center px-4 py-2 text-gray-200 hover:bg-gray-800 rounded-lg transition duration-200 ease-in-out transform hover:scale-105">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v16m0-8h16"></path>
                    </svg>
                    Kelola Vulnerability Assessment
                </a>
            </li>
            <li>
                <a href="{{ route('admin.email.index') }}" class="flex items-center px-4 py-2 text-gray-200 hover:bg-gray-800 rounded-lg transition duration-200 ease-in-out transform hover:scale-105">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a3 3 0 003.22 0L22 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Kelola Email
                </a>
            </li>
            <li>
                <a href="{{ route('admin.api-tte.index') }}" class="flex items-center px-4 py-2 text-gray-200 hover:bg-gray-800 rounded-lg transition duration-200 ease-in-out transform hover:scale-105">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m-7-7h14"></path>
                    </svg>
                    Kelola API TTE
                </a>
            </li>
            <li>
                <a href="{{ route('admin.pengaduan.index') }}" class="flex items-center px-4 py-2 text-gray-200 hover:bg-gray-800 rounded-lg transition duration-200 ease-in-out transform hover:scale-105">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10m0 4H7m0 4h6"></path>
                    </svg>
                    Kelola Pengaduan
                </a>
            </li>
        </ul>
        <div class="px-10 py-2 mt-0">
            <div class="px-6 py-4 mt-6">
                <div class="flex justify-center mb-4">
                    <img src="/img/indeks KAMI official.png" alt="Logo" class="h-16 w-16">
                </div>
                <p class="text-center text-gray-500 text-sm">© 2024 Admin Panel</p>
            </div>
        </div>
    </nav>
</aside>
