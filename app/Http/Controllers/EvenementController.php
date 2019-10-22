<?php

namespace App\Http\Controllers;

use App\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class EvenementController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Evenement::all();
        $calendar = Calendar::addEvents($events)->setOptions([
            'locale' => config('app.locale'),
            'header' => [
                'left' => 'prev,next',
                'center' => 'title',
                'right' => null
            ],
            'views' => [
                'month' => [
                    'timeFormat' => (config('app.locale') === 'fr' ? 'H:mm' : null)
                ]
            ]
        ]);

        return view('pages.evenements.index', compact('calendar'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $event = Evenement::findOrFail($id);

        return view('pages.evenements.show', compact('event'));
    }
}
