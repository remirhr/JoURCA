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

<form action="{{url('classement1', $classement1->id)}}" method="post">
  @csrf
  @method('PUT')
  <div class="mb-3 row">
    <label for="idEquipeC" class="col-sm-2 col-form-label">Numéro de l'équipe étant numéro  {{$classement1->id}}</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idEquipeC" id="idEquipeC" placeholder="Saisir le numéro de l'équipe" value="{{$classement1->idEquipeC}}"/>
    </div>
 
  <div class="mb-3">
    <div class="offset-sm-2 col-sm-10">
      <button class="button-34" type="submit">Modifier</button>
      <a href="{{route('classement1.show',$classement1->id)}}" class="button-32">Annuler</a>
    </div>
  </div>
</form>
</div>
@endsection