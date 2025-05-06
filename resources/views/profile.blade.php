@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto p-6">
    <div class="bg-white rounded-xl shadow-md overflow-hidden p-6 text-center transition-all duration-300 hover:shadow-lg">

        <!-- Profile Avatar -->
        <div class="mx-auto h-24 w-24 rounded-full bg-green-50 flex items-center justify-center text-green-600 mb-6 ring-4 ring-green-100/50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
        </div>

        <!-- Welcome Section -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Welcome, <span class="text-green-600">{{ $username }}</span></h1>
            <p class="text-gray-500">This is your profile page</p>
        </div>

        <!-- Account Information -->
        <div class="bg-gray-50 rounded-lg p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200">Account Information</h2>
            <div class="space-y-4">
                <div class="bg-white p-3 rounded-lg shadow-xs">
                    <p class="text-sm text-gray-500">Member since</p>
                    <p class="text-gray-800 font-medium">{{ date('F Y') }}</p>
                </div>
                <div class="bg-white p-3 rounded-lg shadow-xs">
                    <p class="text-sm text-gray-500">Last active</p>
                    <p class="text-gray-800 font-medium">Today</p>
                </div>
                <div class="bg-white p-3 rounded-lg shadow-xs">
                    <p class="text-sm text-gray-500">Status</p>
                    <p class="text-green-600 font-medium">Active</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
