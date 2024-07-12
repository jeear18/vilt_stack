<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create()
     {
        return inertia('Auth/Login');
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
        return redirect()->intended('/listing');
    }

    // public function destroy()
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('listing.index');
    }

    
}
