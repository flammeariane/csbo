@extends('layout')

@section('title','My Calendar')

@push('style')
	<link rel="stylesheet" href="{{asset('css/cal.css')}}">
@endpush

@section('content')

@php
	function generateCalendar ($firstDayWeek, $numsOfDay, $month, $year) {
		$curWeek = 0;                           // Compteur de jours de la semaine courrante
        $emptyDays = 1;                         // Compteur de jours vide
        $curDay = 1;                            // Compteur de jours du mois

        // Cases vides
        while ($emptyDays < $firstDayWeek) {    // Insertion des cases vides
            echo '<td></td>';
            $emptyDays++;
            $curWeek++;
        }

        
        // Remplissage des jours
        while ($curDay <= $numsOfDay){
            echo '<td>'.$curDay.'</td>';

            $curDay++;
            $curWeek++;

            // Si on atteint le numéro 7 au jours de la semaine
            if ($curWeek == 7){                 
                $curWeek = 0;                   // On remet de compteur à 0
                echo '</tr><tr>';               // On crée une nouvelle ligne du tableau
            }
        }

        // Si il reste des jours vide pour la semaine courrante
        while ($curWeek < 7 & $curWeek > 0){    
            echo '<td></td>';                   // On remplis les cases vides qui restent
            $curWeek++;
        }
	}
@endphp

<h1>My calendar</h1>

<h2> {{ $monthYearStr }} </h2>


<table>
	<thead>
		<tr>
			<td>Lu</td>
			<td>Ma</td>
			<td>Me</td>
			<td>Je</td>
			<td>Ve</td>
			<td>Sa</td>
			<td>Di</td>
		</tr>
	</thead>
	<tbody>
		{{ generateCalendar($firstDayWeek, $numsOfDay, $month, $year) }}
	</tbody>
	
</table>

<ul>
    @foreach ($evenements as $evenement)
        @php
            $substr = substr($evenement->dateDebut,0,10)
        @endphp
        <li>{{ $substr }}</li>
    @endforeach
</ul>
    

@endsection