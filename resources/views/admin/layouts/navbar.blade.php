<nav class="bg-gray-900 p-4 shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo / Judul Dashboard -->
        <div class="text-white text-2xl font-extrabold tracking-wider flex items-center">
            <img src="/img/logo resmi/cimahi.png" alt="Logo" class="h-8 w-8 mr-2">
            Admin Dashboard
        </div>

        <!-- Menu & Action Items -->
        <div class="flex items-center space-x-8">
            <!-- Toggle Dark/Light Mode -->
            <button id="theme-toggle" class="relative p-2 rounded-full focus:outline-none transition-all duration-300 transform hover:scale-110">
                <svg id="theme-toggle-light-icon" class="w-6 h-6 hidden text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v2m0 14v2m9-9h-2m-14 0H3m16.95-6.95l-1.414 1.414M6.364 17.657l-1.414 1.414M16.95 16.95l-1.414-1.414M6.364 6.364L4.95 7.778"></path>
                </svg>
                <svg id="theme-toggle-dark-icon" class="w-6 h-6 hidden text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z"></path>
                </svg>
            </button>
            
            <!-- User Profile Dropdown -->
            <div class="relative">
                <button id="user-menu-button" class="flex items-center space-x-2 focus:outline-none transition-transform duration-200 transform hover:scale-105">
                    <img class="h-8 w-8 rounded-full border-2 border-gray-500" src="/img/avatar.png" alt="User Avatar">
                    <span class="text-gray-300 font-medium">Admin</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div id="user-menu-dropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50 hidden">
                    <a href="{{ route('admin.profile') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                    <form action="{{ route('admin.logout') }}" method="POST" class="block">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Script for Navbar Interactivity -->
<script>
    const themeToggleBtn = document.getElementById('theme-toggle');
    const lightIcon = document.getElementById('theme-toggle-light-icon');
    const darkIcon = document.getElementById('theme-toggle-dark-icon');
    const currentTheme = localStorage.getItem('theme');
    const userMenuButton = document.getElementById('user-menu-button');
    const userMenuDropdown = document.getElementById('user-menu-dropdown');

    // Set initial theme
    if (currentTheme) {
        document.documentElement.classList.add(currentTheme);
        if (currentTheme === 'dark') {
            darkIcon.classList.remove('hidden');
        } else {
            lightIcon.classList.remove('hidden');
        }
    } else {
        lightIcon.classList.remove('hidden');
    }

    // Toggle theme
    themeToggleBtn.addEventListener('click', function () {
        document.documentElement.classList.toggle('dark');
        lightIcon.classList.toggle('hidden');
        darkIcon.classList.toggle('hidden');
        localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
    });

    // Toggle user menu dropdown
    userMenuButton.addEventListener('click', function () {
        userMenuDropdown.classList.toggle('hidden');
    });

    // Close dropdown if clicked outside
    document.addEventListener('click', function (e) {
        if (!userMenuButton.contains(e.target) && !userMenuDropdown.contains(e.target)) {
            userMenuDropdown.classList.add('hidden');
        }
    });
</script>
