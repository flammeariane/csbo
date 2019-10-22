@extends('layouts.wrapper')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    {{ $event->titre }}
                    {{ $event->lieu}} <br>
                    {{ "Début : ".$event->dateDebut ->format('d/m/y H:i')}}<br>
                    {{ "Fin : ".$event->dateFin->format('d/m/y H:i')}}
                </div>
                <div class="card-footer">
                    <div class="float-left">
                        <a href="{{ route('events.index') }}" class="btn btn-primary">{{ __('Return back') }}</a>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-success" href="mailto:{{ env('EVENT_PROPOSE_MAIL_TO') }}?subject=Proposition - {{ $event->titre }} ({{ $event->dateDebut->format('d/m/Y H:i') }}) - {{ auth()->user()->fullName }} ({{ auth()->user()->id }})&body=Proposition de candidature concernant l'événement: {{ $event->titre }}, le {{ $event->dateDebut->format('d/m/y h:m') }}">{{ __('I propose to') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
