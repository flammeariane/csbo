@extends('layout')


@section('title', 'Accueil')
    
   

@section('content')

<section class="button">
            <a href="{{ url('event') }}" class="text-decoration-none"><button type="button" class="btn btn-outline-danger btn-lg btn-block">Calendrier</button></a>
            <a href="{{ url('myEvent') }}" class="text-decoration-none"><button type="button" class="btn btn-outline-danger btn-lg btn-block mt-4">Mes Evénements</button></a>
            <a href="{{ url('myWear') }}" class="text-decoration-none"><button type="button" class="btn btn-outline-danger btn-lg btn-block mt-4">Mes Tenues</button>
            <a href="{{ url('account') }}" class="text-decoration-none"><button type="button" class="btn btn-outline-danger btn-lg btn-block mt-4">Mon Compte</button>
            <a href="{{ url('/') }}" class="text-decoration-none"><button type="button" class="btn btn-outline-danger btn-lg btn-block"style='margin-top: 30%'>Deconnexion</button>
            
    </section>


@endsection
