<?php

namespace App\Http\Controllers;

use App\CategorieEvenement;
use App\Evenement;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function cal(){
        $evenements = Evenement::all();
        $categorie = CategorieEvenement::all();

        setlocale(LC_ALL, 'fr_FR.utf8','fra');              // Afficher la date en français

        $month = 4;
        $year = 2019;

        $firstDayMonth = mktime(0,0,0,$month,1,$year);      // Premier jour du mois en question
        $numsOfDay = date('t', $firstDayMonth);             // Nombre de jours dans le mois
        $getDate = getdate($firstDayMonth);                 // Infos sur le mois
        $monthYearStr = strftime("%B %Y", $firstDayMonth);  // Mois et année sélectionnée en texte 
        $firstDayWeek = $getDate['wday'];
                           // Quel jour de la semaine commence le premier jour

        $funcVar = 'Huh...';

        return view('cal', compact('evenements','categorie','month','year','monthYearStr', 'firstDayWeek', 'numsOfDay'));
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
