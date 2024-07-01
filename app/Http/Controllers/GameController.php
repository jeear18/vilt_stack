<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Games;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return inertia(
            'Game/Index',
        [
            // 'listings' => FacadesDB::table('listings')->get()
            'games' => Game::all()
            // Listing::all()
            
        ]
    );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Game/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          Game::create([
            // ...$request->all(),
            ...$request->validate([
                'Mobile_Legend' => 'required',
                'CoD' => 'required',
                'Wildrift' => 'required',
                
            ])
            ]);
        return redirect()->route('games.index')
        ->with('success', 'Game was created');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return inertia(
            'Game/Show',
        [
            'game' => $game
            
        ]
    );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        return inertia(
            'Game/Edit',
        [
            'game' => $game
            
        ]
    );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $game -> update([
            ...$request->validate([
                'Mobile_Legend' => 'required',
                'CoD' => 'required',
                'Wildrift' => 'required',
                
            ])
            ]);
        return redirect()->route('games.index')
        ->with('success', 'Game was changed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game -> delete();
        
        return redirect()->back()
        ->with('success','Game was deleted');
    }
    
}
