@extends('admin.layouts.master')

@section('title', 'Kelola E-Mail Requests')

@section('content')
<div class="bg-gray-100 shadow-lg rounded-xl p-8 transition duration-500 ease-in-out transform">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-4xl font-extrabold text-gray-900">Pengajuan E-Mail Requests</h2>
    </div>

    @if (session('success'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-8 rounded-lg shadow-sm flex items-center space-x-2">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4-4m5 3v4a2 2 0 01-2 2H7a2 2 0 01-2-2v-4m5 3h.01"></path>
        </svg>
        <span>{{ session('success') }}</span>
    </div>
    @endif

    <!-- Pencarian -->
    <div class="relative mb-8">
        <input type="text" id="searchInput" value="{{ $search }}" placeholder="Cari berdasarkan Nama, NIK/NIP, Kode Pengajuan, Email, atau No. Telepon" class="w-full pl-12 pr-4 py-3 rounded-lg shadow-md border-gray-300 focus:outline-none focus:ring-4 focus:ring-purple-500 focus:border-purple-500 transition duration-300">
        <svg class="w-6 h-6 absolute top-3 left-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
    </div>

    <!-- Tabel Pengajuan E-Mail Requests -->
    <div class="overflow-x-auto rounded-lg shadow-lg bg-white">
        <table class="min-w-full">
            <thead class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
                <tr>
                    <th class="py-4 px-6 text-center font-bold tracking-wider cursor-pointer" onclick="sortTable(0)">Nama Lengkap <span id="arrow0"></span></th>
                    <th class="py-4 px-6 text-center font-bold tracking-wider cursor-pointer" onclick="sortTable(1)">NIK/NIP <span id="arrow1"></span></th>
                    <th class="py-4 px-6 text-center font-bold tracking-wider cursor-pointer" onclick="sortTable(2)">Kode Pengajuan <span id="arrow2"></span></th>
                    <th class="py-4 px-6 text-center font-bold tracking-wider cursor-pointer" onclick="sortTable(3)">Email <span id="arrow3"></span></th>
                    <th class="py-4 px-6 text-center font-bold tracking-wider cursor-pointer" onclick="sortTable(4)">No. Telepon <span id="arrow4"></span></th>
                    <th class="py-4 px-6 text-center font-bold tracking-wider cursor-pointer" onclick="sortTable(5)">Status <span id="arrow5"></span></th>
                    <th class="py-4 px-6 text-center font-bold tracking-wider">Berkas</th>
                    <th class="py-4 px-6 text-center font-bold tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody id="emailTableBody" class="bg-white divide-y divide-gray-200">
                @foreach ($emailRequests as $request)
                <tr class="hover:bg-gray-100 transition duration-300 ease-in-out transform">
                    <td class="py-4 px-6 text-center text-gray-900 font-semibold">{{ $request->nama_lengkap }}</td>
                    <td class="py-4 px-6 text-center text-gray-900">{{ $request->nik_nip }}</td>
                    <td class="py-4 px-6 text-center text-gray-900">{{ $request->kode_tiket }}</td>
                    <td class="py-4 px-6 text-center text-gray-900">{{ $request->email_pemohon }}</td>
                    <td class="py-4 px-6 text-center text-gray-900">{{ $request->telepon }}</td>
                    <td class="py-4 px-6 text-center">
                        <form action="{{ route('admin.email.updateStatus', $request->id) }}" method="POST">
                            @csrf
                            <select name="status" onchange="this.form.submit()" class="bg-gray-50 border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-300">
                                <option value="new" {{ $request->status == 'new' ? 'selected' : '' }}>Baru</option>
                                <option value="processed" {{ $request->status == 'processed' ? 'selected' : '' }}>Dalam Proses</option>
                                <option value="completed" {{ $request->status == 'completed' ? 'selected' : '' }}>Selesai</option>
                                <option value="rejected" {{ $request->status == 'rejected' ? 'selected' : '' }}>Ditolak</option>
                            </select>

                        </form>
                    </td>
                    <td class="py-4 px-6 text-center">
                        @if ($request->berkas)
                            <a href="{{ Storage::url($request->berkas) }}" download class="text-blue-500 hover:underline">Download</a>
                        @else
                            Tidak ada berkas
                        @endif
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="flex justify-center items-center space-x-4">
                            <a href="{{ route('admin.email.edit', $request->id) }}" class="text-green-500 hover:text-green-700 transition duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5h6m-3 3V5a2 2 0 00-2-2H9m-2 0H5a2 2 0 00-2 2v4a2 2 0 002 2h2v6h6v2m0 0H5v-6"></path>
                                </svg>
                            </a>
                            <form action="{{ route('admin.email.destroy', $request->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 transition duration-300">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Paginasi -->
    <div class="mt-8">
        {{ $emailRequests->links('pagination::simple-tailwind') }}
    </div>
</div>

<!-- JavaScript untuk Pengurutan dan Pencarian Dinamis -->
<script>
    let currentSortDirection = {};

    document.getElementById('searchInput').addEventListener('input', function () {
        fetch(`{{ route('admin.email.index') }}?search=${this.value}`)
            .then(response => response.text())
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const newTbody = doc.querySelector('#emailTableBody');
                document.getElementById('emailTableBody').replaceWith(newTbody);
            });
    });

    function sortTable(column) {
        const table = document.querySelector('table');
        let rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        switching = true;
        dir = currentSortDirection[column] === "asc" ? "desc" : "asc";
        currentSortDirection[column] = dir;

        while (switching) {
            switching = false;
            rows = table.rows;
            for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;
                x = rows[i].getElementsByTagName("TD")[column];
                y = rows[i + 1].getElementsByTagName("TD")[column];

                if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    }
                } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    }
                }
            }
            if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                switchcount++;
            } else {
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
        updateArrows(column, dir);
    }

    function updateArrows(column, dir) {
        for (let i = 0; i < 7; i++) {
            document.getElementById("arrow" + i).innerHTML = "";
        }
        if (dir == "asc") {
            document.getElementById("arrow" + column).innerHTML = "&#9650;";
        } else {
            document.getElementById("arrow" + column).innerHTML = "&#9660;";
        }
    }
</script>
@endsection
