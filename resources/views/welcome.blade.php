<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Persandian Kota Cimahi</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-900">

@include('components.header')

<section class="relative bg-gradient-to-r from-blue-500 to-blue-700 py-20">
    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-extrabold leading-tight tracking-tight text-white mb-8">
            Persandian dan Keamanan Informasi (DILANSANDI) <br>CIMAHI
        </h1>
        <p class="max-w-3xl mx-auto text-xl leading-relaxed text-white mb-12">
            Layanan Persandian Terpadu satu atap CISRT - ESIGN / TTE - Vulnerability Assessment - Pentest - PHKS / JKS - Secure Chat / Mail - SSL - INDEKS KAMI
        </p>
        <div class="flex justify-center space-x-6">
            <a href="#section-sandi" class="inline-flex items-center justify-center text-white bg-emerald-500 hover:bg-emerald-600 border-0 py-3 px-10 rounded-full text-lg shadow-lg transform transition-all duration-300 ease-in-out hover:scale-105">
                Read More
            </a>
            <a href="#section-layanan" class="inline-flex items-center justify-center text-gray-700 dark:text-gray-200 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 border-0 py-3 px-10 rounded-full text-lg shadow-lg transform transition-all duration-300 ease-in-out hover:scale-105">
                Layanan
            </a>
        </div>
    </div>
</section>

<section class="bg-gray-100 py-16">
    <div class="container mx-auto">
        <!-- Konten lainnya -->
    </div>
</section>

<section id="section-sandi" class="text-gray-600 body-font bg-gradient-to-b from-gray-100 to-white py-16">
    <div class="container mx-auto flex md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-full mb-6 md:mb-0">
            <img class="object-cover object-center rounded-lg shadow-lg w-full h-full" alt="security" src="img/Update SOC.png">
        </div>
        <div class="lg:flex-grow mt-5 md:mt-0 md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h2 class="text-3xl font-bold leading-tight text-gray-800 mb-4">Persandian, Tidak Sekedar Sandi</h2>
            <p class="leading-relaxed text-gray-700">
                Secara umum, urusan persandian dan keamanan informasi dilaksanakan oleh Bidang Persandian dan Keamanan Informasi Dinas Komunikasi Informatika Statistik dan Persandian Cimahi, dimana meliputi kegiatan pengamanan data/informasi yang dilaksanakan dengan menerapkan konsep, teori, seni, dan ilmu kripto beserta ilmu pendukung lainnya sehingga terjaganya kerahasiaan, keaslian, keutuhan, ketersediaan, dan kenirsangkalan informasi. Kegiatan urusan persandian dan keamanan informasi pada Pemerintah Daerah mengacu pada kebijakan Badan Siber dan Sandi Negara (BSSN).
            </p>
        </div>
    </div>
</section>

<section id="section-e-sign" class="text-gray-600 body-font bg-gradient-to-b from-white to-gray-100 py-16">
    <div class="container mx-auto flex md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-full mb-6 md:mb-0">
            <img class="object-cover object-center rounded-lg shadow-lg w-full h-full" alt="e-sign" src="img/jumat TTE.png">
        </div>
        <div class="lg:flex-grow mt-5 md:mt-0 md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h2 class="text-3xl font-bold leading-tight text-gray-800 mb-4">E-Sign Tanda Tangan Elektronik</h2>
            <p class="leading-relaxed text-gray-700">
                Tanda Tangan Elektronik memberikan keabsahan yang sama dengan tanda tangan manual. Dengan layanan ini, Anda dapat menandatangani dokumen secara digital dengan keamanan yang terjamin dan mudah digunakan.
            </p>
        </div>
    </div>
</section>

<section id="section-pentest" class="text-gray-600 body-font bg-gradient-to-b from-gray-100 to-white py-16">
    <div class="container mx-auto flex md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-full mb-6 md:mb-0">
            <img class="object-cover object-center rounded-lg shadow-lg w-full h-full" alt="pentest" src="img/ITSA KAMI.png">
        </div>
        <div class="lg:flex-grow mt-5 md:mt-0 md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h2 class="text-3xl font-bold leading-tight text-gray-800 mb-4">Vulnerability Assessment dan Pentest</h2>
            <p class="leading-relaxed text-gray-700">
                Melakukan evaluasi keamanan untuk mengidentifikasi dan mengatasi kelemahan sistem. Layanan ini penting untuk memastikan sistem Anda tetap aman dan terlindungi dari ancaman keamanan yang mungkin timbul.
            </p>
        </div>
    </div>
</section>

<section id="section-layanan" class="bg-gradient-to-b from-white to-gray-100 py-16">
    <div class="container mx-auto px-5">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold leading-tight text-gray-800">Layanan Kami</h2>
        </div>
        <div class="flex flex-wrap -m-4 justify-center">
            <div class="p-4 md:w-1/2 lg:w-1/3">
                <div class="flex rounded-xl h-full bg-gradient-to-r from-indigo-50 to-indigo-100 p-8 flex-col shadow-lg hover:shadow-2xl transition-shadow transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 mr-4 inline-flex items-center justify-center rounded-full bg-gradient-to-r from-indigo-400 to-indigo-500 text-white flex-shrink-0">
                            <i class="fas fa-file-signature text-lg"></i>
                        </div>
                        <h3 class="text-gray-800 text-xl font-semibold title-font">E-Sign Tanda Tangan Elektronik</h3>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base text-gray-700">Tanda Tangan Elektronik memberikan keabsahan yang sama dengan tanda tangan manual.</p>
                        <a href="/layanan/e-sign" class="mt-4 text-indigo-600 inline-flex items-center hover:underline">Go
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/2 lg:w-1/3">
                <div class="flex rounded-xl h-full bg-gradient-to-r from-indigo-50 to-indigo-100 p-8 flex-col shadow-lg hover:shadow-2xl transition-shadow transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 mr-4 inline-flex items-center justify-center rounded-full bg-gradient-to-r from-indigo-400 to-indigo-500 text-white flex-shrink-0">
                            <i class="fas fa-shield-alt text-lg"></i>
                        </div>
                        <h3 class="text-gray-800 text-xl font-semibold title-font">Vulnerability Assessment dan Pentest</h3>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base text-gray-700">Melakukan evaluasi keamanan untuk mengidentifikasi dan mengatasi kelemahan sistem.</p>
                        <a href="/layanan/vulnerability-assessment" class="mt-4 text-indigo-600 inline-flex items-center hover:underline">Go
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/2 lg:w-1/3">
                <div class="flex rounded-xl h-full bg-gradient-to-r from-indigo-50 to-indigo-100 p-8 flex-col shadow-lg hover:shadow-2xl transition-shadow transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 mr-4 inline-flex items-center justify-center rounded-full bg-gradient-to-r from-indigo-400 to-indigo-500 text-white flex-shrink-0">
                            <i class="fas fa-envelope text-lg"></i>
                        </div>
                        <h3 class="text-gray-800 text-xl font-semibold title-font">Penerbitan Email Kedinasan</h3>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base text-gray-700">Penerbitan email resmi untuk keperluan dinas dan komunikasi formal.</p>
                        <a href="/layanan/e-mail" class="mt-4 text-indigo-600 inline-flex items-center hover:underline">Go
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/2 lg:w-1/3">
                <div class="flex rounded-xl h-full bg-gradient-to-r from-indigo-50 to-indigo-100 p-8 flex-col shadow-lg hover:shadow-2xl transition-shadow transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 mr-4 inline-flex items-center justify-center rounded-full bg-gradient-to-r from-indigo-400 to-indigo-500 text-white flex-shrink-0">
                            <i class="fas fa-code-branch text-lg"></i>
                        </div>
                        <h3 class="text-gray-800 text-xl font-semibold title-font">Integrasi API - TTE</h3>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base text-gray-700">Integrasi API untuk tanda tangan elektronik yang dapat digunakan di berbagai platform.</p>
                        <a href="/layanan/api-tte" class="mt-4 text-indigo-600 inline-flex items-center hover:underline">Go
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/2 lg:w-1/3">
                <div class="flex rounded-xl h-full bg-gradient-to-r from-indigo-50 to-indigo-100 p-8 flex-col shadow-lg hover:shadow-2xl transition-shadow transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 mr-4 inline-flex items-center justify-center rounded-full bg-gradient-to-r from-indigo-400 to-indigo-500 text-white flex-shrink-0">
                            <i class="fas fa-lock text-lg"></i>
                        </div>
                        <h3 class="text-gray-800 text-xl font-semibold title-font">CSIRT</h3>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base text-gray-700">Tim tanggap insiden keamanan siber untuk menjaga keamanan informasi di Kota Cimahi.</p>
                        <a href="https://cimahi-csirt.cimahikota.go.id/" class="mt-4 text-indigo-600 inline-flex items-center hover:underline">Go
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('components.footer')

<!-- Alpine.js CDN -->
<script src="//cdn.jsdelivr.net/npm/alpinejs@3.4.2/dist/cdn.min.js"></script>
</body>
</html>
