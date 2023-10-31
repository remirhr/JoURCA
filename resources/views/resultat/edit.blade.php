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
    <label for="id" class="col-sm-2 col-form-label">Numéro de l'équipe (Dossart)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="id" id="id" placeholder="Saisir le nom de l'équipe" value="{{$resultat->id}}"/>
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