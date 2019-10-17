@extends('layouts.wrapper', [ 'title' => __('Home') ])

@section('content')
<div class="container">

    @if (session('status'))
        <div class="row">
            <div class="col-12">
                @alert(['type' => 'success'])
                    {{ session('status') }}
                @endalert
            </div>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-10">
            <ul class="list-unstyled">
                <li class="mb-2">
                    <a class="btn btn-navigation btn-block border-primary" href="{{ route('events.index') }}">{{ __('Calendar of events') }}</a>
                </li>
                <li class="mb-2">
                    <a class="btn btn-navigation btn-block border-primary" href="{{ route('user.events') }}">{{ __('My events') }}</a>
                </li>
                <li class="mb-2">
                    <a class="btn btn-navigation btn-block border-primary" href="{{ route('user.outfits') }}">{{ __('My outfits') }}</a>
                </li>
                <li>
                    <a class="btn btn-navigation btn-block border-primary disabled" href="{{ route('user.account') }}">{{ __('My account') }}</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-10">
            <ul class="list-unstyled mt-50">
                <li class="mb-2">
                    <a class="btn btn-navigation btn-block border-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>
@endsection
