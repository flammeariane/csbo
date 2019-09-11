<?php

namespace App\Http\Controllers;


use App\Evenement;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function cal(){
        return view('cal');
    }

    public function calPop(){
        return view('calPop');
    }

    public function delEvent(){
        return view('delEvent');
    }

    public function account(){
        return view('account');
    }

    public function accountEdit()
    {
        return view ('accountEdit');
    }

    public function event(){
        $evenements = Evenement::all();

        return view ('event', [
            'data'=>$evenements
        ]);
    }

    public function myEvent(){
        return view('myEvent');
    }

    public function myWear(){
        return view('myWear');
    }
}
