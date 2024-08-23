<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Bidang Persandian</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
    @include('components.header')

    <div class="py-12 flex justify-center">
        <div class="bg-white shadow-md rounded-lg p-8 max-w-4xl w-full">
            <h1 class="text-center text-3xl font-bold text-gray-900 mb-8">
                Program Bidang Persandian dan Keamanan Informasi
            </h1>
            <div class="space-y-6">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">1. Penyelenggaraan Persandian untuk Pengamanan Informasi Pemerintah Daerah Kabupaten/Kota:</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-2 ml-6">
                        <li>Penetapan kebijakan tata kelola keamanan informasi dan jaring komunikasi sandi pemerintah daerah kabupaten/kota.</li>
                        <li>Pelaksanaan analisis kebutuhan dan pengelolaan sumber daya keamanan informasi pemerintah daerah kabupaten/kota.</li>
                        <li>Pelaksanaan keamanan informasi pemerintah daerah kabupaten/kota berbasis elektronik dan non elektronik.</li>
                        <li>Penyediaan layanan keamanan informasi pemerintah daerah kabupaten/kota.</li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">2. Penetapan Pola Hubungan Komunikasi Sandi Antar Perangkat Daerah Kabupaten/Kota:</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-2 ml-6">
                        <li>Operasionalisasi jaringan komunikasi sandi pemerintah daerah kabupaten/kota.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')

    <!-- Alpine.js CDN -->
    <script src="//cdn.jsdelivr.net/npm/alpinejs@3.4.2/dist/cdn.min.js"></script>
</body>
</html>
