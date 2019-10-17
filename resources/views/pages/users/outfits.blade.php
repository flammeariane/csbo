@extends('layouts.wrapper', ['title' => __('My outfits')])

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-12">
            @forelse($outfits as $outfit)
                <div class="card">
                    <div class="card-body">
                        <b>{{ $outfit->quantite }}</b>
                        {{ $outfit->type()->nom }}
                        {{ $outfit->size()->taille }}
                        ({{ $outfit->dateAttribution->diffForHumans() }})
                    </div>
                </div>
            @empty
                <div class="card">
                    <div class="card-body">
                        {{ __('You have no assigned outfits') }}
                    </div>
                </div>
            @endforelse
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
