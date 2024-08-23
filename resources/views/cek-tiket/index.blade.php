<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Status Tiket</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

@include('components.header')

<div class="flex justify-center items-center min-h-screen bg-gray-100 py-6 sm:py-12">
    <div class="relative w-full max-w-lg mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg"></div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-lg sm:p-10">
            <h2 class="text-3xl font-bold leading-tight text-center mb-4 text-gray-900">Cek Status Tiket</h2>
            <form action="{{ route('cek-tiket.cek') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="kode_tiket" class="block text-sm font-medium text-gray-700">Masukkan Kode Tiket Anda</label>
                    <input type="text" name="kode_tiket" id="kode_tiket" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('kode_tiket') border-red-500 @enderror" value="{{ old('kode_tiket') }}">
                    @error('kode_tiket')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cek Status</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('components.footer')

</body>
</html>
