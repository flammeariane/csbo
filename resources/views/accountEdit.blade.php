


@extends('layout')

    @section('title', 'MyAccount EDIT')
    
 

@section('content')

<form action="">
    <div class="form-group">
        <label for="nameLabel">Nom</label>
        <input type="text" class="form-control" id="inputNom" placeholder="Entrez votre nom">
    </div>
    <div class="form-group">
        <label for="prenomLabel">Prénom</label>
        <input type="text" class="form-control" id="inputPrenom" placeholder="Entrez votre prénom">
    </div>
    <div class="form-group">
        <label for="emailLabel">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Entrez votre adresse Email">
    </div>
    <div class="form-group">
        <label for="telLabel">Téléphone</label>
        <input type="number" class="form-control" id="inputTel" placeholder="Entrez votre numéro de téléphone">
    </div>
    <div class="form-group">
        <label for="dateNaissanceLabel">Date de naissance</label>
        <input type="date" class="form-control" id="inputNaissance" placeholder="Entrez votre date de naissance">
    </div>
    <div class="form-group">
        <label for="adressLabel">Adresse</label>
        <input type="text" class="form-control" id="inputAdresse1" placeholder="Ligne 1">
        <input type="text" class="form-control" id="inputAdresse2" placeholder="Ligne 2">
    </div>
    <div class="form-group">
        <label for="matriculeLabel">matricule</label>
        <input type="text" class="form-control" id="inputMatricule">
    </div>
</form>

@endsection