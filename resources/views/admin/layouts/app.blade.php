<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen" x-data="{ open: false }">

    <!-- Navbar Atas -->
    <header class="bg-gray-800 text-white shadow-md">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <div class="text-xl font-bold">Admin Dashboard</div>
            <nav>
                <ul class="hidden sm:flex items-center space-x-4">
                    <li><a href="#" class="hover:text-gray-400">Home</a></li>
                    <li><a href="#" class="hover:text-gray-400">Profile</a></li>
                    <li><a href="{{ route('admin.logout') }}" class="hover:text-gray-400">Logout</a></li>
                </ul>
                <!-- Mobile Menu Button -->
                <button @click="open = !open" class="sm:hidden text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </nav>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="sm:hidden" x-show="open" @click.away="open = false">
        <ul class="bg-gray-800 text-white">
            <li class="py-2 px-4"><a href="#" class="block hover:bg-gray-700">Home</a></li>
            <li class="py-2 px-4"><a href="#" class="block hover:bg-gray-700">Profile</a></li>
            <li class="py-2 px-4"><a href="{{ route('admin.logout') }}" class="block hover:bg-gray-700">Logout</a></li>
        </ul>
    </div>

    <div class="flex flex-1">
        <!-- Sidebar Navigasi -->
        <aside class="w-full sm:w-1/4 bg-gray-900 text-white min-h-screen">
            <div class="px-6 py-4 text-lg font-bold">
                Admin Panel
            </div>
            <nav>
                <ul>
                    <li class="py-2 px-4 hover:bg-gray-700">
                        <a href="{{ route('admin.dashboard') }}" class="block">Dashboard</a>
                    </li>
                    <li class="py-2 px-4 hover:bg-gray-700">
                        <a href="#" class="block">Layouts</a>
                    </li>
                    <li class="py-2 px-4 hover:bg-gray-700">
                        <a href="#" class="block">Pages</a>
                    </li>
                    <li class="py-2 px-4 hover:bg-gray-700">
                        <a href="#" class="block">Charts</a>
                    </li>
                    <li class="py-2 px-4 hover:bg-gray-700">
                        <a href="#" class="block">Tables</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Konten Utama -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

</body>
</html>
    