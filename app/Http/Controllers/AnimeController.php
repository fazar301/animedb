<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    protected $apiKey;
    protected $apiHost = 'anime-db.p.rapidapi.com';

    public function __construct()
    {
        $this->apiKey = env('RAPIDAPI_KEY');
    }

    public function index()
    {
        $response = Http::withHeaders([
            'X-RapidAPI-Key' => $this->apiKey,
            'X-RapidAPI-Host' => $this->apiHost,
        ])->get('https://anime-db.p.rapidapi.com/anime', [
            'page' => 1,
            'size' => 20,
        ]);

        $animeList = $response->json()['data'] ?? [];

        return view('home', compact('animeList'));
    }

    public function topAnime()
    {
        $response = Http::withHeaders([
            'X-RapidAPI-Key' => $this->apiKey,
            'X-RapidAPI-Host' => $this->apiHost,
        ])->get('https://anime-db.p.rapidapi.com/anime', [
            'page' => 1,
            'size' => 20,
            'sortBy' => 'ranking',
            'sortOrder' => 'asc',
        ]);

        $animeList = $response->json()['data'] ?? [];

        return view('top-anime', compact('animeList'));
    }

    public function show($id)
    {
        $response = Http::withHeaders([
            'X-RapidAPI-Key' => $this->apiKey,
            'X-RapidAPI-Host' => $this->apiHost,
        ])->get("https://anime-db.p.rapidapi.com/anime/by-id/{$id}");

        $anime = $response->json();

        if (!$anime || isset($anime['message'])) {
            abort(404);
        }

        return view('anime.show', compact('anime'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        if (empty($query)) {
            return redirect()->route('home');
        }

        $response = Http::withHeaders([
            'X-RapidAPI-Key' => $this->apiKey,
            'X-RapidAPI-Host' => $this->apiHost,
        ])->get('https://anime-db.p.rapidapi.com/anime', [
            'page' => 1,
            'size' => 20,
            'search' => $query,
        ]);

        $results = $response->json()['data'] ?? [];

        return view('search', compact('results', 'query'));
    }

    public function genres()
    {
        // This is a mock list of genres since the API might not provide a direct endpoint for all genres
        $genres = [
            "Action",
            "Adventure",
            "Comedy",
            "Drama",
            "Fantasy",
            "Horror",
            "Mystery",
            "Romance",
            "Sci-Fi",
            "Slice of Life",
            "Sports",
            "Supernatural",
            "Thriller",
            "Mecha",
            "Music",
            "Psychological",
            "Seinen",
            "Shoujo",
            "Shounen",
        ];

        return view('genres', compact('genres'));
    }
}
