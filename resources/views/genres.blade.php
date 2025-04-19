@extends('layouts.app')

@section('title', 'Genres')

@section('content')
    <section>
        <h2 class="text-2xl font-bold mb-6">Browse by Genre</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($genres as $genre)
                <a href="{{ route('search', ['query' => $genre]) }}" class="block">
                    <div class="bg-white rounded-lg shadow p-6 text-center hover:shadow-lg transition-shadow">
                        <h3 class="text-lg font-semibold">{{ $genre }}</h3>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
