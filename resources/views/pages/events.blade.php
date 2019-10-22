@extends('layouts.wrapper', ['title' => __('My events')])

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-12">
            @forelse($events as $event)
                <div class="card mb-3">
                    <div class="card-body">
                       <b> {{ $event->titre }} </b><br>
                        {{ $event->lieu}} <br>
                        {{ "Début : ".$event->dateDebut ->format('d/m/y H:i')}}<br>
                        {{ "Fin : ".$event->dateFin->format('d/m/y H:i')}}
                       <a class="btn btn-navigation btn border-primary" href="mailto:{{ env('EVENT_CANCEL_MAIL_TO', null) }}?subject=Annulation - {{ $event->titre }} ({{ $event->dateDebut->format('d/m/Y H:i') }}) - {{ auth()->user()->fullName }}&body=Veuillez renseigner la raison de votre annulation..">{{ __('Cancel') }}</a>
                    </div>
                </div>
            @empty
                <div class="card">
                    <div class="card-body">
                        {{ __('Vous ne participez à aucun évenements') }}
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 mt-50">
            <ul class="list-unstyled">
                <li class="mb-2">
                    <a class="btn btn-navigation btn-block border-primary" href="{{ route('home') }}">{{ __('Home') }}</a></button>
                </li>
            </ul>
            
        </div>
    </div>

</div>
@endsection
