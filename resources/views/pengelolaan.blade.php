@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">

        <div class="mb-8">

            <h1 class="text-3xl font-bold text-gray-800">Kayu tersedia</h1>
            <p class="text-gray-700">Selamat datang, <span class="font-bold">{{ $username }}</span>!</p>
            <p class="text-green-700 mt-2">List Kayu Tersedia</p>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-green-700 text-white">
                        <tr>
                            <th class="px-6 py-4 text-left font-medium uppercase tracking-wider">Tipe</th>
                            <th class="px-6 py-4 text-left font-medium uppercase tracking-wider">Daerah</th>
                            <th class="px-6 py-4 text-right font-medium uppercase tracking-wider">Harga Kisaran</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach(   $dataKayu as $kayu)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <div class="h-full w-full rounded-full bg-green-100 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{ $kayu['nama'] }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">{{ $kayu['asal'] }}</div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <span class="text-sm font-semibold text-green-700">Rp {{ number_format($kayu['harga'], 0, ',', '.') }}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
