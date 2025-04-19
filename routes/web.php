<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;

Route::get('/', [AnimeController::class, 'index'])->name('home');
Route::get('/top-anime', [AnimeController::class, 'topAnime'])->name('top-anime');
Route::get('/genres', [AnimeController::class, 'genres'])->name('genres');
Route::get('/search', [AnimeController::class, 'search'])->name('search');
Route::get('/anime/{id}', [AnimeController::class, 'show'])->name('anime.show');