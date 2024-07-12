<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class GameAuthController extends Controller
{
    public function create()
    {
       return inertia('Auth/GameLogin');
       // return inertia('Listing/Index');
   }

   // public function store()
   public function store(Request $request)
   {
       if (!Auth::attempt($request->validate([
           'email' => 'required|string|email',
           'password' => 'required|string'
       ]), true)) {
           throw ValidationException::withMessages([
               'email' => 'Authentication failed'
           ]);
       }

       $request->session()->regenerate();

       // return redirect()->intended();
       return redirect()->intended('/games');
   }

   // public function destroy()
   public function destroy(Request $request)
   {
       Auth::logout();

       $request->session()->invalidate();
       $request->session()->regenerateToken();

       return redirect()->route('games.index');
   }
}
