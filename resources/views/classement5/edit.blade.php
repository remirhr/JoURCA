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

<form action="{{url('classement5', $classement5->id)}}" method="post">
  @csrf
  @method('PUT')
  <div class="mb-3 row">
    <label for="idEquipeC5" class="col-sm-2 col-form-label">Numéro de l'équipe étant numéro  {{$classement5->id}}</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idEquipeC5" id="idEquipeC5" placeholder="Saisir le numéro de l'équipe" value="{{$classement5->idEquipeC5}}"/>
    </div>
 
  <div class="mb-3">
    <div class="offset-sm-2 col-sm-10">
      <button class="btn btn-primary mb-1 mr-1" type="submit">Modifier</button>
      <a href="{{route('classement5.show',$classement5->id)}}" class="btn btn-danger mb-1">Annuler</a>
    </div>
  </div>
</form>
</div>
@endsection