@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section>
        <h2 class="text-2xl font-bold mb-6">Popular Anime</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($animeList as $anime)
                @include('components.anime-card', ['anime' => $anime])
            @endforeach
        </div>
    </section>
@endsection
