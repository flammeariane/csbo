@extends('layout')

@section('title', 'Delete Event')

@section('content')

<section class="container">
    <div class="evenement">
        <h1>{{__('Evénements')}}</h1>
            <div class="row justify-content-center">
                <div class="nom-evenement">
                    <input type="text">
                </div>
            </div>
    </div>

    <div id="card" class="card">
    <h1>{{__('Motif')}}</h1>
        <div class="card-body">
            <div class="Motif">
                <input type="textearea">
            </div>
    </div>
    </div>
    <div class="bouton-envoyer\ ">
        <button class="btn btn-outline-danger" type="submit" value="envoyer">Envoyer</button>
    </div>

    <div class="bouton-retour">

    </div>

</section>



@endsection
