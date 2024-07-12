<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameAccountController;
use App\Http\Controllers\GameAuthController;
use App\Http\Controllers\UserAccountController;
use Illuminate\Contracts\Auth\UserProvider;

// Route::get('/', [IndexController::class, 'index']);
// Route::get('/hello', [IndexController::class, 'show'])
//   ->middleware('auth');
// Route::get('/show', [IndexController::class, 'show']);

Route::get('/about', [IndexController::class, 'about']);
Route::get('/contact', [IndexController::class, 'contact']);
//----- you can pick what kind of function in the controller
// Route::resource('listing', ListingController::class)->only(['index', 'show','create','store','edit','update']);

//----  Except
// Route::resource('listing', ListingController::class)->except(['destroy']);

//----- GAMES CONTROLLER
Route::resource('games', GameController::class)
->only(['create', 'store', 'edit', 'update', 'destroy'])->middleware('auth');
Route::resource('games', GameController::class)
->except(['create', 'store', 'edit', 'update', 'destroy']);
Route::get('game-login',[GameAuthController::class,'create'])->name('Login');
Route::post('game-login',[GameAuthController::class,'store'])->name('Login.store');
Route::delete('game-login',[GameAuthController::class,'destroy'])->name('game-logout');
Route::resource('game-account', GameAccountController::class)->only(['create','store']);

//------- ALL ACTIONS
//------- LISTING CONTROLLERS
Route::resource('listing', ListingController::class)
->only(['create', 'store', 'edit', 'update', 'destroy'])
->middleware('auth');
Route::resource('listing', ListingController::class)
->except(['create', 'store', 'edit', 'update', 'destroy']);

Route::get('login', [AuthController::class, 'create'])
  ->name('login');
Route::post('login', [AuthController::class, 'store'])
  ->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])
  ->name('logout');

Route::resource('user-account', UserAccountController::class) -> only(['create','store']);

