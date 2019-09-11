<?php

namespace App\Http\Controllers;


use App\Evenement;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home(){
        $evenements = Evenement::all();

        return view('home', [
            'data'=>$evenements
        ]);
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

    public function myEvent(){
        return view('myEvent');
    }

    public function myWear(){
        return view('myWear');
    }
}
