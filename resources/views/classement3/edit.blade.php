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

<form action="{{url('classement3', $classement3->id)}}" method="post">
  @csrf
  @method('PUT')
  <div class="mb-3 row">
    <label for="idEquipeC3" class="col-sm-2 col-form-label">Numéro de l'équipe étant numéro  {{$classement3->id}}</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idEquipeC3" id="idEquipeC3" placeholder="Saisir le numéro de l'équipe" value="{{$classement3->idEquipeC3}}"/>
    </div>
 
  <div class="mb-3">
    <div class="offset-sm-2 col-sm-10">
      <button class="button-34" type="submit">Modifier</button>
      <a href="{{route('classement3.show',$classement3->id)}}" class="button-32">Annuler</a>
    </div>
  </div>
</form>
</div>
@endsection