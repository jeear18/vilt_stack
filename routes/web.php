<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/show', [IndexController::class, 'show']);

Route::get('/about', [IndexController::class, 'about']);
Route::get('/contact', [IndexController::class, 'contact']);
//----- you can pick what kind of function in the controller
// Route::resource('listing', ListingController::class)->only(['index', 'show','create','store','edit','update']);

//----  Except
// Route::resource('listing', ListingController::class)->except(['destroy']);

//------- ALL ACTIONS
Route::resource('listing', ListingController::class);
Route::resource('games', GameController::class);

