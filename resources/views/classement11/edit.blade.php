@extends('template')

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

<form action="{{url('classement11', $classement11->id)}}" method="post">
  @csrf
  @method('PUT')
  <div class="mb-3 row">
    <label for="idEquipeC11" class="col-sm-2 col-form-label">Numéro de l'équipe étant numéro  {{$classement11->id}}</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" name="idEquipeC11" id="idEquipeC11" placeholder="Saisir le numéro de l'équipe" value="{{$classement11->idEquipeC11}}"/>
    </div>
 
  <div class="mb-3">
    <div class="offset-sm-2 col-sm-11">
      <button class="btn btn-primary mb-1 mr-1" type="submit">Modifier</button>
      <a href="{{route('classement11.show',$classement11->id)}}" class="btn btn-danger mb-1">Annuler</a>
    </div>
  </div>
</form>
</div>
@endsection