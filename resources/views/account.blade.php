@extends('layout')

    @section('title','Mon compte')

@section('content')

<section>
    <div class="list-group-flush mt-3">
        <p class="list-group-item border-0 shadow-sm mx-4 my-2 bg-light">Nom: Dupont</p>
        <p class="list-group-item border-0 shadow-sm mx-4 my-2 bg-light">Prénom: David</p>
        <p class="list-group-item border-0 shadow-sm mx-4 my-2 bg-light">Email: dupont.david@gmail.com</p>
        <p class="list-group-item border-0 shadow-sm mx-4 my-2 bg-light">Téléphone: 0473/25.68.74</p>
        <p class="list-group-item border-0 shadow-sm mx-4 my-2 bg-light">Date de naissance: 12/08/1971</p>
        <p class="list-group-item border-0 shadow-sm mx-4 my-2 bg-light">Adresse: 15, rue des Granges 1000 Bruxelles</p>
        <p class="list-group-item border-0 shadow-sm mx-4 my-2 bg-light">Matricule: 45821645</p>
    </div>
    <div class="d-flex justify-content-around">
        <a href="/accountEdit" class="btn btn-primary">Modifier mes infos</a>
        <a href="/accueil" class="btn btn-secondary">Retour</a>
    </div>
</section>


@endsection

 