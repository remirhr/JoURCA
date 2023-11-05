@extends('template')
@section('title') Modification du participant {{$participant->PrenomP}} {{$participant->NomP}} @endsection
@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{url('participant', $participant->id)}}" method="post">
  @csrf
  @method('PUT')
  <div class="mb-3 row col-30">
    <label for="id" class="col-sm-10 col-form-label">Numéro du Participant (numéro étudiant) </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="id" id="id" placeholder="Saisir le numéro du participant (numéro étudiant)." value="{{$participant->id}}"/>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="NomP" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="NomP" name="NomP" placeholder="Saisir le nom du participant." value="{{$participant->NomP}}"/>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="PrenomP" class="col-sm-2 col-form-label">Prénom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="PrenomP" id="PrenomP" placeholder="Saisir le prénom du participant." value="{{$participant->PrenomP}}"/>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="DateDeNaissance" class="col-sm-2 col-form-label">Date de naissance</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="DateDeNaissance" id="DateDeNaissance" placeholder="Saisir la date de naissance au format YYYY-MM-JJ."value="{{$participant->DateDeNaissance}}"/>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="NumeroEtudiant" class="col-sm-2 col-form-label">Numéro Etudiant</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="NumeroEtudiant" id="NumeroEtudiant" placeholder="Saisir le numéro étudiant du participant." value="{{$participant->NumeroEtudiant}}"/>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="idComposante" class="col-sm-2 col-form-label">Numéro de la composante</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idComposante" id="idComposante" row="4" placeholder="1 : SEN | 2 : LSH | 3 : EiSINe | 4 : SESG | 5 : DSP | 6 : STAPS | 7 : Médecine | 8 : CdC | 9 : ESIReims | 10 : Odonto | 11 : Pharma | 12 : Institut G.Chappaz13IUT | 13 : RCC | 14 : IUT Troyes | 15 : Inspé | 16 : Siège" />
    </div>
  </div>
  <div class="mb-3">
    <div class="offset-sm-2 col-sm-10">
      <button class="btn btn-primary mb-1 mr-1" type="submit">Modifier</button>
      <a href="{{url('participant/')}}" class="btn btn-danger mb-1">Annuler</a>
    </div>
  </div>
</form>
</div>
@endsection