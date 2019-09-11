@extends('layout')

    @section('title','Mon compte')

@section('content')

<div class="container">
    <div class="row" id=cadre>
        <ul>
            <li>Nom :</li>
            <li>Prénom :</li>
            <li>Email :</li>
            <li>Téléphone :</li>
            <li>Date de naissance :</li>
            <li>Adresse :</li>
            <li>Code postal :</li>
            <li>N° de matricule :</li>
        </ul>
    </div>
</div>
<a href="/"><span class="boutonGauche">Modifier</span></a>
@endsection

 