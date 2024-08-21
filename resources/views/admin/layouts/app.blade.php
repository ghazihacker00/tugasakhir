<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- Navbar Atas -->
    <header class="bg-gray-800 text-white">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <div class="text-xl font-bold">Admin Dashboard</div>
            <nav>
                <ul class="flex items-center space-x-4">
                    <li><a href="#" class="hover:text-gray-400">Home</a></li>
                    <li><a href="#" class="hover:text-gray-400">Profile</a></li>
                    <li><a href="{{ route('admin.logout') }}" class="hover:text-gray-400">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="flex flex-1">
        <!-- Sidebar Navigasi -->
        <aside class="w-full sm:w-1/4 bg-gray-900 text-white">
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
