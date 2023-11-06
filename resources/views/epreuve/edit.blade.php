@extends('template')
@section('title') Modifier une épreuve @endsection
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

<form action="{{url('epreuve', $epreuve->id)}}" method="post">
  @csrf
  @method('PUT')
  <div class="mb-3 row">
    <label for="title" class="col-sm-2 col-form-label">Intitulé</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title" id="title" placeholder="Saisir le nom de l'épreuve" value="{{$epreuve->title}}"/>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="description" class="col-sm-2 col-form-label">Contenu</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="description" name="description" rows="3" placeholder="Saisir la description de l'épreuve">{{$epreuve->description}}</textarea>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="img" class="col-sm-2 col-form-label">img</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="img" id="img" placeholder="Saisir le logo de l'épreuve" value="{{$epreuve->img}}"/>
    </div>
  </div>
  <div class="mb-3">
    <div class="offset-sm-2 col-sm-10">
      <button class="button-34" type="submit">Modifier</button>
      <a href="{{route('epreuve.show',$epreuve->id)}}" class="button-32">Annuler</a>
    </div>
  </div>
</form>
</div>
@endsection