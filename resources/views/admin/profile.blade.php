@extends('admin.layouts.master')

@section('title', 'Profile')

@section('content')
    <div class="bg-white shadow-lg rounded-lg p-6 max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-6 text-gray-800">Hallo Admin</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Section for Profile Picture -->
            <div class="flex justify-center items-center">
                <img src="/img/avatar.png" alt="Admin Avatar" class="rounded-full h-40 w-40 border-2 border-gray-300 shadow-md">
            </div>

            <!-- Section for Profile Details -->
            <div>
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Personal Information</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-600">Name:</label>
                        <p class="text-lg text-gray-900">Admin Name</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600">Email:</label>
                        <p class="text-lg text-gray-900">admin@example.com</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600">Role:</label>
                        <p class="text-lg text-gray-900">Administrator</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section for Actions -->
        <div class="mt-8">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Account Actions</h3>
            <div class="flex space-x-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">Edit Profile</button>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded transition duration-300">Logout</button>
                </form>
            </div>
        </div>
    </div>
@endsection
