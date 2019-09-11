@extends('layout')


@section('title', 'Calendrier')
    
   

@section('content')

<h1>Event</h1>

<ul>
	@foreach ($data as $item)
		<li>{{ $item->titre }}</li>
	@endforeach
</ul>

<a href="/accueil">Back home</a>
@endsection
