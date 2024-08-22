<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Bidang Persandian</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    @include('components.header')

    <div class="py-10 flex justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-4xl w-full">
            <h1 class="text-center text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                PROGRAM BIDANG PERSANDIAN DAN KEAMANAN INFORMASI
            </h1>
            <ol class="list-decimal list-inside text-gray-800 space-y-4 leading-relaxed">
                <li>
                    Penyelenggaraan Persandian untuk Pengamanan Informasi Pemerintah Daerah Kabupaten/Kota:
                    <ul class="list-disc list-inside pl-5 mt-2 space-y-2">
                        <li>Penetapan kebijakan tata kelola keamanan informasi dan jaring komunikasi sandi pemerintah daerah kabupaten/kota.</li>
                        <li>Pelaksanaan analisis kebutuhan dan pengelolaan sumber daya keamanan informasi pemerintah daerah kabupaten/kota.</li>
                        <li>Pelaksanaan keamanan informasi pemerintah daerah kabupaten/kota berbasis elektronik dan non elektronik.</li>
                        <li>Penyediaan layanan keamanan informasi pemerintah daerah kabupaten/kota.</li>
                    </ul>
                </li>
                <li>
                    Penetapan Pola Hubungan Komunikasi Sandi Antar Perangkat Daerah Kabupaten/Kota:
                    <ul class="list-disc list-inside pl-5 mt-2 space-y-2">
                        <li>Operasionalisasi jaringan komunikasi sandi pemerintah daerah kabupaten/kota.</li>
                    </ul>
                </li>
            </ol>
        </div>
    </div>

    @include('components.footer')

    <!-- Alpine.js CDN -->
    <script src="//cdn.jsdelivr.net/npm/alpinejs@3.4.2/dist/cdn.min.js"></script>
</body>
</html>
