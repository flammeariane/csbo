@extends('layouts.wrapper', ['title' => __('Calendar of events')])

@push('styles')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.1/fullcalendar.min.css"/>
@endpush

@push('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.1/fullcalendar.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.1/locale-all.js"></script>
    {!! $calendar->script() !!}
@endpush

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    {!! $calendar->calendar() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12">
            <ul class="list-unstyled mt-50">
                <li class="mb-2">
                    <a class="btn btn-block border-primary" href="{{ route('user.events') }}">{{ __('My events') }}</a>
                </li>
                <li class="mb-2">
                    <a class="btn btn-block border-primary" href="{{ route('home') }}">{{ __('Home') }}</a>
                </li>
            </ul>
        </div>
    </div>

</div>
@endsection
