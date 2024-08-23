<!-- resources/views/admin/dashboard.blade.php -->
@extends('admin.layouts.master')

@section('title', 'Dashboard')

@section('content')
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-3xl font-bold mb-4">Welcome Back, Admin!</h2>
        <p class="text-gray-600 mb-6">Data yang tersedia</p>

        <!-- Card Overview -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 sm:gap-6">
            <!-- E-Sign Requests -->
            <div class="bg-blue-500 text-white p-4 sm:p-6 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                <h3 class="text-lg font-semibold">Layanan Pemanfaatan Tandatangan Elektronik(TTE)</h3>
                <p class="text-3xl sm:text-4xl font-bold mt-2">{{ $eSignCount }}</p>
            </div>
            <!-- Vulnerability Assessments -->
            <div class="bg-green-500 text-white p-4 sm:p-6 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                <h3 class="text-lg font-semibold">Layanan Vulnerability Assessments dan Penetration Test</h3>
                <p class="text-3xl sm:text-4xl font-bold mt-2">{{ $vulnerabilityAssessmentCount }}</p>
            </div>
            <!-- E-Mail Requests -->
            <div class="bg-yellow-500 text-white p-4 sm:p-6 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                <h3 class="text-lg font-semibold">Layanan Surat Elektronik Resmi Kedinasan</h3>
                <p class="text-3xl sm:text-4xl font-bold mt-2">{{ $emailRequestCount }}</p>
            </div>
            <!-- API TTE Requests -->
            <div class="bg-red-500 text-white p-4 sm:p-6 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                <h3 class="text-lg font-semibold">Layanan Integrasi Sertifikat Elektronik dan Sistem Elektronik</h3>
                <p class="text-3xl sm:text-4xl font-bold mt-2">{{ $apiTTERequestCount }}</p>
            </div>
            <!-- Pengaduan -->
            <div class="bg-purple-500 text-white p-4 sm:p-6 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                <h3 class="text-lg font-semibold">Helpdesk</h3>
                <p class="text-3xl sm:text-4xl font-bold mt-2">{{ $pengaduanCount }}</p>
            </div>
        </div>

        <!-- Chart Section -->
        <div class="mt-8 bg-gray-100 p-4 sm:p-6 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold mb-4 text-center">Jumlah Permintaan</h3>
            <div class="flex justify-center">
                <canvas id="requestChart" class="w-full max-w-md"></canvas>
            </div>
        </div>
    </div>

    <!-- Script for Chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('requestChart').getContext('2d');
        const requestChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['E-Sign', 'Vulnerability', 'E-Mail', 'API TTE', 'Helpdesk'],
                datasets: [{
                    label: 'Jumlah Permintaan',
                    data: [{{ $eSignCount }}, {{ $vulnerabilityAssessmentCount }}, {{ $emailRequestCount }}, {{ $apiTTERequestCount }}, {{ $pengaduanCount }}],
                    backgroundColor: [
                        '#3b82f6', // Blue
                        '#22c55e', // Green
                        '#fbbf24', // Yellow
                        '#ef4444', // Red
                        '#a855f7', // Purple
                    ],
                    borderColor: [
                        '#2563eb', // Blue
                        '#16a34a', // Green
                        '#f59e0b', // Yellow
                        '#dc2626', // Red
                        '#7c3aed', // Purple
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true,
                            borderColor: '#d1d5db',
                        },
                        ticks: {
                            color: '#374151',
                            font: {
                                size: 14
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#374151',
                            font: {
                                size: 14
                            }
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#374151',
                        titleColor: '#fff',
                        bodyColor: '#fff',
                        borderWidth: 1,
                        borderColor: '#d1d5db',
                    }
                }
            }
        });
    </script>
@endsection
