<?php

namespace App\Http\Controllers;

use Gate;
use App\Models\Listing;
use GuzzleHttp\Middleware;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as FacadesDB;
use \Illuminate\Foundation\Auth\Access\AuthorizesRequests\AuthorizesRequests;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     // dd(Auth::check());

    //  public function __construct($listing)
    //  {
    //      $this->authorizeResource(Listing::class, 'listing');
        
         
    //  }

     public function istong( $listing )
     {
         if (Auth::user()->id !==  $listing->by_user_id)  {
             return true;
         }else{
             return false;
         }
     }
  
     public function index()
    {
        //
       
        //   dd(User::Listing);
        return inertia(
            'Listing/Index',
        [
            // 'listings' => FacadesDB::table('listings')->get()
            // 'listings' => Listing::all()
            'listings' => Listing::orderByDesc('created_at')
            ->paginate(10)
            
        ]
    );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // if (Auth::user()->cannot('create', Listing::class)) {
        //     abort(401);
        // }
        return inertia('Listing/Create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // if($request->user()->can('update')){

        // }else{
        //     abort(403);
        // }
        //
        // dd($request->all());
        // dd($request->beds);
        // $listing = new Listing();
        // $listing->beds = $request->beds;

        // $listing->save();

        // Listing::create($request->all());

        // Listing::create([
            $request->user()->listings()->create(
            $request->validate([
                'beds' => 'required|integer|min:1|max:20',
                'baths' => 'required|integer|min:10|max:200',
                'area' => 'required|integer|min:15|max:50',
                'city' => 'required',
                'code' => 'required',
                'street' => 'required',
                'street_nr' => 'required|min:1|max:20',
                'price' => 'required|integer|min:1|max:200000',
            ])
            );
        return redirect()->route('listing.index')
        ->with('success', 'Listing was created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        if (Auth::user()->id ===  $listing->by_user_id || Auth::user()->is_admin)  {

            return inertia(
                'Listing/Show',
            [
                'listing' => $listing
                
            ]
        );
            
        } else {
            abort(403);
        // if (! Gate::allows('update', $$listing)) {
        //     abort(403);
        // }
        // dd($listing->id);
        //    if (Auth::user()->cannot('show', $listing)) {
        //     abort(403);
        // }
        // $this->authorize('view',$listing);
        
        // $this->authorize('view', $listing);
      
    }
    }

    /**
     * Show the form for editing the specified resource.
     */
 
    public function edit(Listing $listing)
    {
        if (Auth::user()->id ===  $listing->by_user_id || Auth::user()->is_admin)  {
            return inertia(
                'Listing/Edit',
            [
                'listing' => $listing
                
            ]
        );
        } else {
            abort(403);
       
        }
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, Listing $listing)
    {
        // dd( $listing->by_user_id);

        // if (Auth::user()->id !==  $listing->by_user_id)  {
        //     abort(403);
        // }
        // if (! Gate::allows('update-post', $listing)) {
        //     abort(403);
        // }
        if($this->istong($listing->by_user_id)){
            $listing -> update([
                ...$request->validate([
                    'beds' => 'required|integer|min:1|max:20',
                    'baths' => 'required|integer|min:10|max:200',
                    'area' => 'required|integer|min:15|max:50',
                    'city' => 'required',
                    'code' => 'required',
                    'street' => 'required',
                    'street_nr' => 'required|min:1|max:20',
                    'price' => 'required|integer|min:1|max:200000',
                ])
                ]);
            return redirect()->route('listing.index')
            ->with('success', 'Listing was changed');
        }      
         else {
            abort(403);
           
        }
        
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        if (Auth::user()->id !==  $listing->by_user_id && Auth::user()->is_admin !== 1)  {
            abort(401);
        } else{
            $listing -> delete();
        
            return redirect()->back()
            ->with('success','Listing was deleted');
        }
       
    }
}
