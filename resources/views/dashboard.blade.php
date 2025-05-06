@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-green-900">Dashboard</h2>
        <p class="text-gray-700">Selamat datang, <span class="font-bold">{{ $username }}</span>!</p>
    </div>
    <!-- Articles Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($articles as $article)
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <!-- Article Image -->
            <div class="h-48 bg-gray-200 overflow-hidden">
                <img src="https://source.unsplash.com/random/600x400?wood,{{ $article['id'] }}"
                     alt="{{ $article['title'] }}"
                     class="w-full h-full object-cover">
            </div>

            <!-- Article Content -->
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <span class="px-3 py-1 bg-amber-100 text-amber-800 text-xs font-semibold rounded-full">
                        {{ $article['category'] }}
                    </span>
                    <span class="text-sm text-gray-500 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        {{ $article['views'] }}
                    </span>
                </div>

                <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $article['title'] }}</h3>
                <p class="text-gray-600 mb-4">{{ $article['summary'] }}</p>

                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">{{ $article['date'] }}</span>
                    <a href="#" class="flex items-center text-amber-600 hover:text-amber-800 font-medium">
                        Lihat Artikel
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination (Optional) -->
    <div class="mt-12 flex justify-center">
        <nav class="flex items-center space-x-2">
            <a href="#" class="px-3 py-1 rounded-md bg-amber-600 text-white font-medium">&laquo; Previous</a>
            <a href="#" class="px-3 py-1 rounded-md bg-gray-100 text-gray-800 hover:bg-gray-200">1</a>
            <a href="#" class="px-3 py-1 rounded-md bg-gray-100 text-gray-800 hover:bg-gray-200">2</a>
            <a href="#" class="px-3 py-1 rounded-md bg-gray-100 text-gray-800 hover:bg-gray-200">3</a>
            <a href="#" class="px-3 py-1 rounded-md bg-amber-600 text-white font-medium">Next &raquo;</a>
        </nav>
    </div>
</div>
@endsection
