@extends('layout')

    @section('title', 'Modifier mon compte')
    

@section('content')

<div class="container">
    <div class="row" id=cadre>
        <ul>
            <li>Nom : <input type="text"></li>
            <li>Prénom : <input type="text"></li>
            <li>Email : <input type="text"></li>
            <li>Téléphone : <input type="text"></li>
            <li>Date de naissance : <input type="text"></li>
            <li>Adresse : <input type="text"></li>
            <li>Code postal : <input type="text"></li>
            <li>N° de matricule : <input type="text"></li>
        </ul>
    </div>
</div>
<a href="/"><span class="boutonGauche">Enregistrer</span></a>
@endsection