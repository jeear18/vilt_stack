<?php

use App\Http\Controllers\GamesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/show', [IndexController::class, 'show']);

Route::get('/about', [IndexController::class, 'about']);
Route::get('/contact', [IndexController::class, 'contact']);
Route::resource('listing', ListingController::class)->only(['index', 'show']);
Route::resource('games', GamesController::class)->only(['index', 'show']);
