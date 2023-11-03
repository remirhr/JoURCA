@extends('template')
@section('title') Modifier un classement @endsection
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

<form action="{{url('classement12', $classement12->id)}}" method="post">
  @csrf
  @method('PUT')
  <div class="mb-3 row">
    <label for="idEquipeC12" class="col-sm-2 col-form-label">Numéro de l'équipe étant numéro  {{$classement12->id}}</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" name="idEquipeC12" id="idEquipeC12" placeholder="Saisir le numéro de l'équipe" value="{{$classement12->idEquipeC12}}"/>
    </div>
 
  <div class="mb-3">
    <div class="offset-sm-2 col-sm-12">
      <button class="btn btn-primary mb-1 mr-1" type="submit">Modifier</button>
      <a href="{{route('classement12.show',$classement12->id)}}" class="btn btn-danger mb-1">Annuler</a>
    </div>
  </div>
</form>
</div>
@endsection