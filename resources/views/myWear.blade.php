@extends('layout')

    @section('title','Mes Tenues')
    

@section('content')


<div class="container">
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Veste de sécurité :
            <span class="badge badge-secondary badge-pill">1</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Polo :
            <span class="badge badge-secondary badge-pill">2</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            T-Shirt :
            <span class="badge badge-secondary badge-pill">1</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Sweat :
            <span class="badge badge-secondary badge-pill">3</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Bottillon de sécurité
            <span class="badge badge-secondary badge-pill">1</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Polar :
            <span class="badge badge-secondary badge-pill">1</span>
        </li>
    </ul>


<a href="/"><span class="btn btn-outline-danger ml-5">Commander</span></a>
<a href="/"><span class="btn btn-outline-danger ml-5">Retour</span></a>
</div>

@endsection