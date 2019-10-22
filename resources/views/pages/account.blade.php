@extends('layouts.wrapper', ['title' => __('My accounts')])

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <b>{{ __('Name') }}:</b> {{ $user->nom }} <br />
                    <b>{{ __('Firstname') }}:</b> {{ $user->prenom }} <br />
                    <b>{{ __('E-Mail Address') }}:</b> {{ $user->email }} <br />
                    <b>{{ __('Phone') }}:</b> {{ $user->gsm ??  __('Undefined') }} <br />
                    <b>{{ __('Birthday') }}:</b> {{ $user->dateNaissance->format('d/m/y') ??  __('Undefined') }} <br />
                    <b>{{ __('Address') }}:</b> {{ $user->addresse ?? __('Undefined') }} <br />
                    <b>{{ __('Registration number') }}:</b> {{ $user->nLegitimation }}
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 mt-50">
            <ul class="list-unstyled">
                <li class="mb-2">
                    <a class="btn btn-navigation btn-block border-primary" href="{{ route('home') }}">{{ __('Home') }}</a>
                </li>
            </ul>
        </div>
    </div>

</div>
@endsection
