<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Pengajuan E-Sign</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

@include('components.header')

<div class="flex justify-center items-center min-h-screen bg-gray-100 py-6 sm:py-12">
    <div class="relative py-3 sm:w-96 w-full">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg"></div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-lg sm:p-10">
            <h2 class="text-3xl font-bold leading-tight text-center mb-4 text-gray-900">Tiket Pengajuan E-Sign</h2>
            <div class="space-y-6">
                <p class="text-center text-lg text-gray-800">Kode Tiket Anda:</p>
                <div class="flex justify-center items-center">
                    <p id="kodeTiket" class="text-center text-2xl font-bold text-blue-600">{{ $eSignRequest->kode_tiket }}</p>
                    <button onclick="copyToClipboard()" class="ml-2 bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-1 px-2 rounded">
                        Salin
                    </button>
                </div>
                <p id="copyMessage" class="text-center text-sm text-green-500 hidden">Kode tiket disalin!</p>
                <p class="text-center text-lg text-gray-800">Status: {{ ucfirst($eSignRequest->status) }}</p>
                <p class="text-center text-gray-600 mt-4">Simpan kode tiket ini untuk mengecek status pengajuan Anda di kemudian hari.</p>
                <div class="flex justify-center mt-6">
                    <a href="/" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.footer')

<script>
    function copyToClipboard() {
        var copyText = document.getElementById("kodeTiket").innerText;
        var textarea = document.createElement("textarea");
        textarea.value = copyText;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand("copy");
        document.body.removeChild(textarea);

        var copyMessage = document.getElementById("copyMessage");
        copyMessage.classList.remove("hidden");
        setTimeout(function() {
            copyMessage.classList.add("hidden");
        }, 2000);
    }
</script>

</body>
</html>
