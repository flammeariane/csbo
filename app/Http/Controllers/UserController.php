<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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

    /**
     * Display all of my outfits
     *
     * @return \Illuminate\Http\Response
     */
    public function outfits() 
    {
        $outfits = user()->outfits();

        return view('pages.users.outfits', compact('outfits'));
    }

    public function account(Request $request) {}
}
