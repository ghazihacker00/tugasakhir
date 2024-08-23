<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dokumen</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    @include('components.header')

    <div class="py-10 flex justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-4xl w-full">
            <h1 class="text-center text-2xl md:text-3xl font-bold text-gray-900 mb-6">
            Daftar Dokumen
            </h1>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white shadow-md rounded-lg">
                    <thead class="bg-gray-200 text-gray-600">
                        <tr>
                            <th class="py-3 px-6 text-center font-bold">No.</th>
                            <th class="py-3 px-6 text-left font-bold">Nama</th>
                            <th class="py-3 px-6 text-center font-bold">Unduh</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($sopFiles as $index => $file)
                        <tr class="hover:bg-gray-100 transition duration-300 ease-in-out">
                            <td class="py-3 px-6 text-center">{{ $index + 1 }}</td>
                            <td class="py-3 px-6">{{ $file->name }}</td>
                            <td class="py-3 px-6 text-center">
                                <a href="{{ $file->path }}" download class="group relative text-blue-500 hover:text-blue-700 transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v12m8-8l-8 8-8-8"/>
                                    </svg>
                                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-8 px-2 py-1 text-xs text-white bg-gray-900 rounded opacity-0 group-hover:opacity-100 group-hover:translate-y-2 transition duration-300">Unduh</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('components.footer')

    <!-- Alpine.js CDN -->
    <script src="//cdn.jsdelivr.net/npm/alpinejs@3.4.2/dist/cdn.min.js"></script>
</body>
</html>
