


@extends('layout')

    @section('title', 'MyAccount EDIT')
    
 

@section('content')

<form action="" class="m-4 border border-primary rounded p-4">
    <div class="form-group">
        <label for="nameLabel">Nom</label>
        <input type="text" class="form-control" id="inputNom" value="Dupont" placeholder="Entrez votre nom">
    </div>
    <div class="form-group">
        <label for="prenomLabel">Prénom</label>
        <input type="text" class="form-control" id="inputPrenom" value="David" placeholder="Entrez votre prénom">
    </div>
    <div class="form-group">
        <label for="emailLabel">Email</label>
        <input type="email" class="form-control" id="inputEmail" value="dupont.david@gmail.com" placeholder="Entrez votre adresse Email">
    </div>
    <div class="form-group">
        <label for="telLabel">Téléphone</label>
        <input type="number" class="form-control" id="inputTel" value="0473256874" placeholder="Entrez votre numéro de téléphone">
    </div>
    <div class="form-group">
        <label for="dateNaissanceLabel">Date de naissance</label>
        <input type="date" class="form-control" id="inputNaissance" value="1971-08-12" placeholder="Entrez votre date de naissance">
        <!-- la value doit être dans ce format: yyyy-mm--dd sinon ça marche pas! -->
    </div>
    <div class="form-group">
        <label for="adressLabel">Adresse</label>
        <input type="text" class="form-control" id="inputAdresse1" value="15, rue des Granges" placeholder="Ligne 1">
        <input type="text" class="form-control mt-2" id="inputAdresse2" value="1000 Bruxelles" placeholder="Ligne 2">
    </div>
    <div class="form-group">
        <label for="matriculeLabel">Matricule</label>
        <input type="number" class="form-control" value="45821645" id="inputMatricule">
    </div>
    <div class="form-group d-flex justify-content-around">
        <input class="btn btn-primary" type="submit" value="Valider">
        <input class="btn btn-secondary" type="button" value="Retour">
    </div>
</form>


@endsection