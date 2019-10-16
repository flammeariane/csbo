@extends('layouts.wrapper', ['title' => __('My events')])

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-12">
            @forelse($events as $event)
                <div class="card">
                    <div class="card-body">
                        {{ $event->titre }}
                    </div>
                </div>
            @empty
                <div class="card">
                    <div class="card-body">
                        {{ __('You do not participate in any events') }}
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
