@extends('template')
@section('title') Création d'une équipe @endsection
@section('content')

<form action="{{url('resultat')}}" method="post">
  @csrf
  @method('PUT')
  <div class="mb-3 row">
    <label for="NomEquipe" class="col-sm-2 col-form-label">Nom de l'équipe</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="NomEquipe" id="NomEquipe" placeholder="Saisir le nom de l'équipe" />
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Slogan" class="col-sm-2 col-form-label">Slogan</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="Slogan" name="Slogan" rows="3" placeholder="Saisir le slogan de l'equipe"></textarea>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="idParticipant1" class="col-sm-2 col-form-label">Numéro étudiant du membre 1</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idParticipant1" id="idParticipant1" placeholder="Saisir l'id du Numéro étudiant du membre  1" />
    </div>
  </div> <div class="mb-3 row">
    <label for="idParticipant2" class="col-sm-2 col-form-label">Numéro étudiant du membre 2</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idParticipant2" id="idParticipant2" placeholder="Saisir l'id du Numéro étudiant du membre  2" />
    </div>
    <div class="mb-3 row">
    <label for="idParticipant3" class="col-sm-2 col-form-label">Numéro étudiant du membre 3</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idParticipant3" id="idParticipant3" placeholder="Saisir l'id du Numéro étudiant du membre  3" />
    </div>
  </div>
  <div class="mb-3 row">
    <label for="idParticipant4" class="col-sm-2 col-form-label">Numéro étudiant du membre 4</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idParticipant4" id="idParticipant4" placeholder="Saisir l'id du Numéro étudiant du membre  4" />
    </div>
  </div>
  <div class="mb-3 row">
    <label for="idParticipant5" class="col-sm-2 col-form-label">Numéro étudiant du membre 5</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idParticipant5" id="idParticipant5" placeholder="Saisir l'id du Numéro étudiant du membre  5" />
    </div>
  </div>
  <div class="mb-3 row">
    <label for="idParticipant6" class="col-sm-2 col-form-label">Numéro étudiant du membre 6</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idParticipant6" id="idParticipant6" placeholder="Saisir l'id du Numéro étudiant du membre 6" />
    </div>
  </div>
  <div class="mb-3 row">
    <label for="idComposante" class="col-sm-2 col-form-label">Numéro de la composante</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idComposante" id="idComposante" placeholder="1 : SEN | 2 : LSH | 3 : EiSINe | 4 : SESG | 5 : DSP | 6 : STAPS | 7 : Médecine | 8 : CdC | 9 : ESIReims | 10 : Odonto | 11 : Pharma | 12 : Institut G.Chappaz13IUT | 13 : IUT RCC | 14 : IUT Troyes | 15 : Inspé | 16 : Siège" />
    </div>
  </div>
  </div>
  <div class="mb-3">
    <div class="offset-sm-2 col-sm-10">
      <button class="btn btn-primary mb-1 mr-1" type="submit">Ajouter</button>
      <a href="{{url('resultat/')}}" class="btn btn-danger mb-1">Annuler</a>
    </div>
  </div>
</form>
</div>
@endsection