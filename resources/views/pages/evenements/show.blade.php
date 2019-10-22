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
                        <button type="button" class="btn btn border-primary"> <a href="mailto:demo@example.com?subject=Proposition - {{ $event->titre }} ({{ $event->dateDebut->format('d/m/Y H:i') }}) - {{ auth()->user()->fullName }}&body=">{{ __('Je me propose') }}</a> </button>
                        <a href="{{ route('events.index') }}" class="btn btn-primary">{{ __('Return back') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
