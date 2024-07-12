<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    //
   
    public function index()
    {
        // dd(Auth::user());
          // dd(Auth::check());
                  // dd(
        //     Hash::make('password'),
        //     '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        //     Hash::check('password', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi')
        // );
        //    Listing::make([
        //     'beds' => 2, 'baths' => 2, 'area' => 100, 'city' => 'North', 'street' => 'Tinker st', 'street_nr' => 20, 'code' => 'TS', 'price' => 200_000
        //    ]);

        return inertia(
            'Index/Index',
        [
            'message' => 'Hello from euggg',
            'try' => 'try pod ni'
        ]
    );
    }
    public function show()
    {
        return inertia('Index/Show');
    }
    public function about()
    {
        return inertia(
            'Index/About',
        [
            'AboutMessage' => 'About'
        ]
    );
    }

    public function contact()
    {
        return inertia(
            'Index/Contacts',
            [
                'ContactMessage' => 'Contactsss'
            ]
        );
    }

}

