@extends('template')
@section('title') Création d'un participant @endsection
@section('content')
<form action="{{url('participant')}}" method="post">
@csrf

  <div class="mb-3 row">
    <label for="idParticipant" class="col-sm-2 col-form-label">Numéro du Participant (numéro étudiant) </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idParticipant" id="idParticipant" placeholder="Saisir le numéro du participant (numéro étudiant)."/>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="NomP" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="NomP" name="NomP" placeholder="Saisir le nom du participant."/>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="PrenomP" class="col-sm-2 col-form-label">Prénom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="PrenomP" id="PrenomP" placeholder="Saisir le prénom du participant."/>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="DateDeNaissance" class="col-sm-2 col-form-label">Date de naissance</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="DateDeNaissance" id="DateDeNaissance" placeholder="Saisir la date de naissance au format YYYY-MM-JJ."/>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="NumeroEtudiant" class="col-sm-2 col-form-label">Numéro Etudiant</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="NumeroEtudiant" id="NumeroEtudiant" placeholder="Saisir le numéro étudiant du participant."/>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="idComposante" class="col-sm-2 col-form-label">Numéro de la composante</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" name="idComposante" row="4" id="idComposante" placeholder="1 : SEN | 2 : LSH | 3 : EiSINe | 4 : SESG | 5 : DSP | 6 : STAPS | 7 : Médecine | 8 : CdC | 9 : ESIReims | 10 : Odonto | 11 : Pharma | 12 : Institut G.Chappaz | 13 : IUT RCC | 14 : IUT Troyes | 15 : Inspé | 16 : Siège" ></textarea>
    </div>
  </div>
  <div class="mb-3">
    <div class="offset-sm-2 col-sm-10">
    <button class="btn btn-primary mb-1 mr-1" type="submit">Ajouter</button>
    <a href="{{url('participant/')}}" class="btn btn-danger mb-1">Annuler</a>
  </div>
</form>
@endsection