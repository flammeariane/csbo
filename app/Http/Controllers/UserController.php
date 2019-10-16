<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function outfits() {}
    
    /**
     * Display only my events.
     *
     * @return \Illuminate\Http\Response
     */
    public function events() 
    {
        $events = user()->events();
        return view('pages.users.events', compact('events'));
    }

    public function profil() {}
}
