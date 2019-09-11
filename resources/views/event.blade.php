@extends('layout')


@section('title', 'Event')
    
   

@section('content')

<h1>Event</h1>

<ul>
	@foreach ($data as $item)
		<li>{{ $item->titre }}</li>
	@endforeach
</ul>

@endsection
