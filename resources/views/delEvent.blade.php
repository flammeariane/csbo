@extends('layout')

@section('title', 'Delete Event')

@section('content')

<div class="container">
    <div class="evenement">
    <h1>{{__('Evénements')}}</h1>
            <div class="row justify-content-center">
                <!-- <div class="nom-evenement">
                    <input type="text">
                </div> -->
            </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div id="motif" class="card">
                <h1>{{ __('Motif') }}</h1>

                <div class="card-body">

                        <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-">
                                    <textarea id="motif" name="motif" rows="6"></textarea>
                                </div>
                            </div>
                </div>
            </div>
            <div class="button-back">
                <button type="submit" class="btn btn-outline-danger">{{ __('Envoyer') }}</button>
            </div>
        </div>
    </div>
</div>

@endsection
