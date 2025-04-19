@extends('layouts.app')

@section('title', $anime['title'] ?? 'Anime Details')

@section('content')
    <div class="mb-6">
        <a href="{{ url()->previous() }}" class="inline-flex items-center text-purple-600 hover:text-purple-800 font-medium">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="md:flex">
            <div class="md:flex-shrink-0 p-6">
                <div class="relative h-80 w-60 mx-auto md:mx-0">
                    <img 
                        src="{{ $anime['image'] ?? 'https://via.placeholder.com/240x320' }}" 
                        alt="{{ $anime['title'] }}" 
                        class="w-full h-full object-cover rounded-lg"
                    >
                </div>
                <div class="mt-4 flex items-center justify-center md:justify-start">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <span class="font-bold">{{ isset($anime['ranking']) ? number_format($anime['ranking'], 1) : 'N/A' }}</span>
                    </div>
                    <span class="mx-2 text-gray-400">•</span>
                    <span>{{ isset($anime['episodes']) ? "{$anime['episodes']} episodes" : 'Unknown episodes' }}</span>
                </div>
            </div>

            <div class="p-6 md:p-8 flex-1">
                <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $anime['title'] }}</h1>
                @if(isset($anime['alternativeTitles']))
                    <p class="text-sm text-gray-500 mb-4">
                        {{ implode(', ', $anime['alternativeTitles']) }}
                    </p>
                @endif

                <div class="mb-6 flex flex-wrap gap-2">
                    @if(isset($anime['genres']))
                        @foreach($anime['genres'] as $genre)
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 rounded-full text-sm">{{ $genre }}</span>
                        @endforeach
                    @endif
                </div>

                <div class="mb-6">
                    <h2 class="text-xl font-semibold mb-2">Synopsis</h2>
                    <p class="text-gray-700">{{ $anime['synopsis'] ?? 'No synopsis available.' }}</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <h3 class="font-semibold text-gray-900">Status</h3>
                        <p>{{ $anime['status'] ?? 'Unknown' }}</p>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Type</h3>
                        <p>{{ $anime['type'] ?? 'Unknown' }}</p>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Year</h3>
                        <p>{{ $anime['year'] ?? 'Unknown' }}</p>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Studios</h3>
                        <p>{{ isset($anime['studios']) ? implode(', ', $anime['studios']) : 'Unknown' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
