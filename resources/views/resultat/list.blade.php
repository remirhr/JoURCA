@extends('template')
@section('title') Résultat de l'épreuve  @endsection
@section('content')

  <ul class="list-group">
  <form id="deleteForm" action="" method="POST">
  @method('DELETE')
  @csrf
</form>
@foreach($resultatList as $resultat)
    <li class="list-group-resultat d-flex align-resultats-center">
      <div class="col-lg-10">
        <span class="">
        <img src="../{{$resultat->pdp}}"  width="50" height="50" />
        </span>
        <strong>{{$resultat->NomEquipe}}</strong>
        @if(strlen($resultat->Slogan) > 100)
          {{substr($resultat->Slogan, 0, 100)}}...
        @else
          {{$resultat->Slogan}}
        @endif
      </div>      
      <div class="col text-end">
        <a href="{{route('resultat.show', $resultat->id)}}" class="btn btn-sm btn-primary mb-1"><i class="bi bi-eye"></i></a>
       @auth
        <a href="{{route('resultat.edit',$resultat->id)}}" class="btn btn-sm btn-primary mb-1">
  <i class="bi bi-pencil-square"></i>
  
</a>
<button type="submit" formaction="{{route('resultat.destroy', $resultat->id)}}" form="deleteForm" class="btn btn-sm btn-danger mb-1">
  <i class="bi bi-trash"></i>
</button>
      </div>
      @endauth
    </li>
    
@endforeach
  </ul>
  <p></p>
  <a href="{{url('epreuve/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Retour à la liste des épreuves</a>
@endsection