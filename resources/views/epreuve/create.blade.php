@extends('template')
@section('title') Création d'un article @endsection
@section('content')
<form action="{{url('item')}}" method="post">
@csrf
@if($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
  <div class="mb-3 row">
    <label for="title" class="col-sm-2 col-form-label">Intitulé</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title" id="title" placeholder="Saisir l'intitulé de l'article"/>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="description" name="description" rows="3" placeholder="Saisir la description de l'article"></textarea>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="price" class="col-sm-2 col-form-label">Prix</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="price" id="price" placeholder="Saisir le prix de l'article"/>
    </div>
  </div>
  <div class="mb-3">
    <div class="offset-sm-2 col-sm-10">
      
    <button class="button-34" type="submit">Ajouter</button>
    <a href="{{url('epreuve/')}}" class="button-32">Annuler</a>
  </div>
</form>
@endsection