<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('admin.dashboard') }}" class="text-white text-lg font-semibold">Admin Dashboard</a>
            <div>
                <a href="{{ route('admin.dashboard') }}" class="text-white px-4">Dashboard</a>
                <a href="{{ route('admin.logout') }}" class="text-white px-4">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-8">
        @yield('content')
    </div>

    @vite('resources/js/app.js')
</body>
</html>
