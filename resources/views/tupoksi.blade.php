<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tupoksi</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 dark:bg-slate-900">

    @include('components.header')

    <section class="py-16 bg-gradient-to-b from-white to-gray-100 dark:from-slate-900 dark:to-slate-800">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-slate-800 shadow-lg rounded-lg p-8 max-w-4xl mx-auto">
                <h1 class="text-center text-3xl font-bold text-gray-900 dark:text-gray-100 mb-8">
                    Tupoksi Bidang Persandian dan Keamanan Informasi
                </h1>
                <div class="text-gray-800 dark:text-gray-300 space-y-6 leading-relaxed">
                    <p>
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-300 mb-4">1. Bidang Persandian dan Keamanan Informasi mempunyai tugas melaksanakan penyusunan, pelaksanaan kebijakan, dan pemberian bimbingan teknis serta pemantauan dan evaluasi di bidang persandian dan keamanan informasi.</h2>
                    </p>
                    <p>
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-300 mb-4">   2. Dalam melaksanakan tugas sebagaimana dimaksud pada ayat (1), Bidang Persandian dan Keamanan Informasi mempunyai fungsi:</h2>
                    </p>
                    <ul class="list-disc list-inside pl-6 space-y-2">
                        <li>Penyusunan program kerja Bidang Persandian dan Keamanan Informasi.</li>
                        <li>Perumusan kebijakan di bidang Persandian dan Keamanan Informasi meliputi pengawasan dan evaluasi persandian, tata kelola persandian, serta keamanan informasi.</li>
                        <li>Pelaksanaan kebijakan di bidang Persandian dan Keamanan Informasi meliputi pengawasan dan evaluasi persandian, tata kelola persandian, serta keamanan informasi.</li>
                        <li>Penyusunan norma, standar, prosedur, dan kriteria di bidang Persandian dan Keamanan Informasi meliputi pengawasan dan evaluasi persandian, tata kelola persandian, serta keamanan informasi.</li>
                        <li>Pemberian bimbingan teknis dan supervisi di bidang Persandian dan Keamanan Informasi meliputi pengawasan dan evaluasi persandian, tata kelola persandian, serta keamanan informasi.</li>
                        <li>Pelaksanaan pemantauan, evaluasi, dan pelaporan di bidang Persandian dan Keamanan Informasi meliputi pengawasan dan evaluasi persandian, tata kelola persandian, serta keamanan informasi.</li>
                        <li>Pelaksanaan fungsi lain yang diberikan oleh Kepala Dinas sesuai dengan tugas dan fungsinya.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

    <!-- Alpine.js CDN -->
    <script src="//cdn.jsdelivr.net/npm/alpinejs@3.4.2/dist/cdn.min.js"></script>
</body>
</html>
