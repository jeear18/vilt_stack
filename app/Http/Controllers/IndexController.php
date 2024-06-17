<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
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

