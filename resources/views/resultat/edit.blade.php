@extends('template')
@section('title') Modifier une équipe @endsection
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

<form action="{{url('resultat', $resultat->id)}}" method="post">
  @csrf
  @method('PUT')
  <div class="mb-3 row">
    <label for="NomEquipe" class="col-sm-2 col-form-label">Nom de l'équipe</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="NomEquipe" id="NomEquipe" placeholder="Saisir le nom de l'équipe" value="{{$resultat->NomEquipe}}"/>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Slogan" class="col-sm-2 col-form-label">Slogan</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="Slogan" name="Slogan" rows="3" placeholder="Saisir le slogan de l'equipe">{{$resultat->slogan}}</textarea>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="idParticipant1" class="col-sm-2 col-form-label">Numéro étudiant du membre 1</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idParticipant1" id="idParticipant1" placeholder="Saisir l'id du Numéro étudiant du membre  1" value="{{$resultat->idParticipant1}}"/>
    </div>
  </div> <div class="mb-3 row">
    <label for="idParticipant2" class="col-sm-2 col-form-label">Numéro étudiant du membre 2</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idParticipant2" id="idParticipant2" placeholder="Saisir l'id du Numéro étudiant du membre  2" value="{{$resultat->idParticipant2}}"/>
    </div>
    <div class="mb-3 row">
    <label for="idParticipant3" class="col-sm-2 col-form-label">Numéro étudiant du membre 3</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idParticipant3" id="idParticipant3" placeholder="Saisir l'id du Numéro étudiant du membre  3" value="{{$resultat->idParticipant3}}"/>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="idParticipant4" class="col-sm-2 col-form-label">Numéro étudiant du membre 4</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idParticipant4" id="idParticipant4" placeholder="Saisir l'id du Numéro étudiant du membre  4" value="{{$resultat->idParticipant4}}"/>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="idParticipant5" class="col-sm-2 col-form-label">Numéro étudiant du membre 5</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idParticipant5" id="idParticipant5" placeholder="Saisir l'id du Numéro étudiant du membre  5" value="{{$resultat->idParticipant5}}"/>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="idParticipant6" class="col-sm-2 col-form-label">Numéro étudiant du membre 6</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idParticipant6" id="idParticipant6" placeholder="Saisir l'id du Numéro étudiant du membre 6" value="{{$resultat->idParticipant6}}"/>
    </div>
  </div>
  </div>
  <div class="mb-3">
    <div class="offset-sm-2 col-sm-10">
      <button class="btn btn-primary mb-1 mr-1" type="submit">Modifier</button>
      <a href="{{route('resultat.show',$resultat->id)}}" class="btn btn-danger mb-1">Annuler</a>
    </div>
  </div>
</form>
</div>
@endsection