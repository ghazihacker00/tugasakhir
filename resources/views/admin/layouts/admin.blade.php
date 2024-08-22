<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100" x-data="{ open: false }">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ route('admin.dashboard') }}" class="text-white text-lg font-semibold">
                Admin Dashboard
            </a>
            <!-- Links for larger screens -->
            <div class="hidden md:flex space-x-4">
                <a href="{{ route('admin.dashboard') }}" class="text-white hover:text-gray-200">Dashboard</a>
                <a href="{{ route('admin.logout') }}" class="text-white hover:text-gray-200">Logout</a>
            </div>
            <!-- Hamburger Icon for mobile -->
            <div class="md:hidden">
                <button @click="open = !open" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Dropdown Menu for mobile -->
        <div x-show="open" @click.away="open = false" class="md:hidden">
            <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-white hover:bg-blue-700">Dashboard</a>
            <a href="{{ route('admin.logout') }}" class="block px-4 py-2 text-white hover:bg-blue-700">Logout</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-8 p-4">
        @yield('content')
    </div>

    @vite('resources/js/app.js')
</body>
</html>
