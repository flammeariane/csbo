@extends('layouts.wrapper')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    {{ $event->titre }}
                </div>
                <div class="card-footer">
                    <div class="float-left">
                        <a href="{{ route('events.index') }}" class="btn btn-primary">{{ __('Return back') }}</a>
                    </div>
                    <div class="float-right">
                        <a href="{{ route('events.index') }}" class="btn btn-success">{{ __('Register for this event') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
