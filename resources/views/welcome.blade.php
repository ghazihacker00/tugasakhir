<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Persandian Kota Cimahi</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

@include('components.header')

<section class="text-gray-600 body-font bg-white dark:bg-slate-900 py-12">
    <div class="container mx-auto flex md:flex-row flex-col-reverse items-center">
        <div class="lg:flex-grow mt-5 md:mt-0 md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="text-2xl font-extrabold leading-9 tracking-tight mb-3 text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-5xl md:leading-normal">
                Persandian dan Keamanan Informasi (DILANSANDI) <br>CIMAHI
            </h1>
            <p class="mb-8 md:pl-0 pl-2 pr-2 leading-relaxed dark:text-gray-300">
                Layanan Persandian Terpadu satu atap CISRT - ESIGN / TTE - Vulnerability Assessment - Pentest - PHKS / JKS - Secure Chat / Mail - SSL - INDEKS KAMI
            </p>
            <div class="flex justify-center">
                <a href="#section-sandi" class="inline-flex text-white bg-emerald-600 border-0 py-2 px-6 focus:outline-none hover:bg-emerald-700 rounded text-lg">Read More</a>
                <a href="#section-layanan" class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Layanan</a>
            </div>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-full mb-6 md:mb-0">
            <img class="object-cover object-center rounded w-full h-full" alt="hero" src="img/CSIRT (7) FIX.png">
        </div>
    </div>
</section>

<section id="section-sandi" class="text-gray-600 body-font bg-white py-12">
    <div class="container mx-auto flex md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-full mb-6 md:mb-0">
            <img class="object-cover object-center rounded w-full h-full" alt="security" src="img/Update SOC.png">
        </div>
        <div class="lg:flex-grow mt-5 md:mt-0 md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h2 class="text-3xl font-bold leading-tight text-gray-900 mb-4">Persandian, Tidak Sekedar Sandi</h2>
            <p class="leading-relaxed text-gray-700">
                Secara umum, urusan persandian dan keamanan informasi dilaksanakan Bidang Persandian dan Keamanan Informasi Dinas Komunikasi Informatika Statistik dan Persandian Cimahi, dimana meliputi kegiatan pengamanan data/informasi yang dilaksanakan dengan menerapkan konsep, teori, seni dan ilmu kripto beserta ilmu pendukung lainnya sehingga terjaganya kerahasiaan, keaslian, keutuhan, ketersediaan, dan kenirsangkalan informasi. Kegiatan urusan persandian dan keamanan informasi pada Pemerintah Daerah mengacu pada kebijakan Badan Siber dan Sandi Negara (BSSN).
            </p>
        </div>
    </div>
</section>

<section id="section-e-sign" class="text-gray-600 body-font bg-white dark:bg-slate-900 py-12">
    <div class="container mx-auto flex md:flex-row flex-col-reverse items-center">
        <div class="lg:flex-grow mt-5 md:mt-0 md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h2 class="text-3xl font-bold leading-tight text-gray-900 dark:text-gray-100 mb-4">E-Sign Tanda Tangan Elektronik</h2>
            <p class="leading-relaxed dark:text-gray-300">
                Tanda Tangan Elektronik memberikan keabsahan yang sama dengan tanda tangan manual. Dengan layanan ini, Anda dapat menandatangani dokumen secara digital dengan keamanan yang terjamin dan mudah digunakan.
            </p>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-full mb-6 md:mb-0">
            <img class="object-cover object-center rounded w-full h-full" alt="e-sign" src="img/jumat TTE.png">
        </div>
    </div>
</section>

<section id="section-pentest" class="text-gray-600 body-font bg-white py-12">
    <div class="container mx-auto flex md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-full mb-6 md:mb-0">
            <img class="object-cover object-center rounded w-full h-full" alt="pentest" src="img/ITSA KAMI.png">
        </div>
        <div class="lg:flex-grow mt-5 md:mt-0 md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h2 class="text-3xl font-bold leading-tight text-gray-900 mb-4">Vulnerability Assessment dan Pentest</h2>
            <p class="leading-relaxed text-gray-700">
                Melakukan evaluasi keamanan untuk mengidentifikasi dan mengatasi kelemahan sistem. Layanan ini penting untuk memastikan sistem Anda tetap aman dan terlindungi dari ancaman keamanan yang mungkin timbul.
            </p>
        </div>
    </div>
</section>

<section id="section-layanan" class="bg-white dark:bg-slate-900 py-12">
    <div class="container mx-auto px-5">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold leading-tight text-gray-900 dark:text-gray-100">Layanan Kami</h2>
        </div>
        <div class="flex flex-wrap -m-4">
            <div class="p-4 md:w-1/2">
                <div class="flex rounded-lg h-full bg-gray-100 dark:bg-gray-800 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                            <i class="fas fa-file-signature"></i>
                        </div>
                        <h3 class="text-gray-900 text-lg title-font font-medium dark:text-gray-100">E-Sign Tanda Tangan Elektronik</h3>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base dark:text-gray-300">Tanda Tangan Elektronik memberikan keabsahan yang sama dengan tanda tangan manual.</p>
                        <a href="/layanan/e-sign" class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/2">
                <div class="flex rounded-lg h-full bg-gray-100 dark:bg-gray-800 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="text-gray-900 text-lg title-font font-medium dark:text-gray-100">Vulnerability Assessment dan Pentest</h3>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base dark:text-gray-300">Melakukan evaluasi keamanan untuk mengidentifikasi dan mengatasi kelemahan sistem.</p>
                        <a href="/layanan/vulnerability-assessment" class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/2">
                <div class="flex rounded-lg h-full bg-gray-100 dark:bg-gray-800 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3 class="text-gray-900 text-lg title-font font-medium dark:text-gray-100">Penerbitan Email Kedinasan</h3>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base dark:text-gray-300">Penerbitan email resmi untuk keperluan dinas dan komunikasi formal.</p>
                        <a href="/layanan/e-mail" class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/2">
                <div class="flex rounded-lg h-full bg-gray-100 dark:bg-gray-800 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                            <i class="fas fa-code-branch"></i>
                        </div>
                        <h3 class="text-gray-900 text-lg title-font font-medium dark:text-gray-100">Integrasi API - TTE</h3>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base dark:text-gray-300">Integrasi API untuk tanda tangan elektronik yang dapat digunakan di berbagai platform.</p>
                        <a href="/layanan/api-tte" class="mt-3 text-indigo-500 inline-flex items-center">Learn More
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
