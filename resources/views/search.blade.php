@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
    <div class="mb-6">
        <a href="{{ route('home') }}" class="inline-flex items-center text-purple-600 hover:text-purple-800 font-medium">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to Home
        </a>
    </div>

    <section>
        <h2 class="text-2xl font-bold mb-6">Search Results for "{{ $query }}"</h2>

        @if(count($results) === 0)
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <p class="text-lg text-gray-600 mb-4">No results found for "{{ $query }}"</p>
                <p class="text-gray-500">Try searching with different keywords</p>
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($results as $anime)
                    @include('components.anime-card', ['anime' => $anime])
                @endforeach
            </div>
        @endif
    </section>
@endsection
