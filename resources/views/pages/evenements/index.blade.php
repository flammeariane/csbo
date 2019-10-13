@extends('layouts.wrapper')

@push('styles')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.9.1/fullcalendar.min.css"/>
@endpush

@push('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.9.1/fullcalendar.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.9.1/lang/fr.js"></script>
    {!! $calendar->script() !!}
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {!! $calendar->calendar() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
