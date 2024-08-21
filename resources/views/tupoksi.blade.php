<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tupoksi</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    @include('components.header')

    <div class="py-10 flex justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-4xl w-full">
            <h1 class="text-center text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                TUPOKSI BIDANG PERSANDIAN DAN KEAMANAN INFORMASI
            </h1>
            <div class="text-gray-800 space-y-4 leading-relaxed">
                <p class="mb-4">
                    1. Bidang Persandian dan Keamanan Informasi mempunyai tugas melaksanakan penyusunan, pelaksanaan kebijakan, dan pemberian bimbingan teknis serta pemantauan dan evaluasi dibidang persandian dan keamanan informasi.
                </p>
                <p>
                    2. Dalam melaksanakan tugas sebagaimana dimaksud pada ayat (1) Bidang Persandian dan Keamanan Informasi mempunyai fungsi:
                </p>
                <ul class="list-disc list-inside pl-5 mt-2 space-y-2">
                    <li>Penyusunan program kerja Bidang Persandian dan Keamanan Informasi.</li>
                    <li>Perumusan kebijakan dibidang Persandian dan Keamanan Informasi meliputi pengawasan dan evaluasi persandian, tata kelola persandian serta keamanan informasi.</li>
                    <li>Pelaksanaan kebijakan dibidang Persandian dan Keamanan Informasi meliputi pengawasan dan evaluasi persandian, tata kelola persandian, serta keamanan informasi.</li>
                    <li>Penyusunan norma, standar, prosedur, dan kriteria dibidang Persandian dan Keamanan Informasi meliputi pengawasan dan evaluasi persandian, tata kelola persandian serta keamanan informasi.</li>
                    <li>Pemberian bimbingan teknis dan supervisi dibidang Persandian dan Keamanan Informasi meliputi pengawasan dan evaluasi persandian, tata kelola persandian serta keamanan informasi.</li>
                    <li>Pelaksanaan pemantauan, mengevaluasi, dan melaporkan dibidang Persandian dan Keamanan Informasi meliputi pengawasan dan evaluasi persandian, tata kelola persandian serta keamanan informasi.</li>
                    <li>Pelaksanaan fungsi lain yang diberikan oleh Kepala Dinas sesuai dengan tugas dan fungsinya.</li>
                </ul>
            </div>
        </div>
    </div>

    @include('components.footer')
</body>
</html>
