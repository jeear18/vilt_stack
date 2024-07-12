<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameAccountController extends Controller
{
    public function create()
    {
        return inertia('UserAccount/GameAccCreate');
    }

    public function store(Request $request)
    {
        // $user = User::make($request->validate([
            $user = User::create($request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]));
        // $user->password = Hash::make($user->password);
        // $user->save();
        Auth::login($user);

        return redirect()->route('games.index')
            ->with('success', 'Account created!');
    }
}

