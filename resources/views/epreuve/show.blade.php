@extends('template')
@section('title')@endsection
@section('content')
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="../{{$epreuve->img}}" alt="">
  <div class="card-body">
    <h5 class="card-title"><strong>{{$epreuve->title}}</strong></h5>
    <p class="card-text">{{$epreuve->description}}</p>
    
<p></p>
<a href="{{url('epreuve/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Retour à la liste</a>
@if($epreuve->id == 1)
<a href="{{url('classement1/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Voir les résultats</a>
@elseif($epreuve->id == 2)
<a href="{{url('classement2/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Voir les résultats</a>
@elseif($epreuve->id == 3)
<a href="{{url('classement3/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Voir les résultats</a>
@elseif($epreuve->id == 4)
<a href="{{url('classement4/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Voir les résultats</a>
@elseif($epreuve->id == 5)
<a href="{{url('classement5/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Voir les résultats</a>
@elseif($epreuve->id == 6)
<a href="{{url('classement6/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Voir les résultats</a>
@elseif($epreuve->id == 7)
<a href="{{url('classement7/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Voir les résultats</a>
@elseif($epreuve->id == 8)
<a href="{{url('classement8/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Voir les résultats</a>
@elseif($epreuve->id == 9)
<a href="{{url('classement9/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Voir les résultats</a>
@elseif($epreuve->id == 10)
<a href="{{url('classement10/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Voir les résultats</a>
@elseif($epreuve->id == 11)
<a href="{{url('classement11/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Voir les résultats</a>
@elseif($epreuve->id == 12)
<a href="{{url('classement12/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Voir les résultats</a>
@elseif($epreuve->id == 13)
<a href="{{url('classement13/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Voir les résultats</a>
@elseif($epreuve->id == 14)
<a href="{{url('classement14/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Voir les résultats</a>
@elseif($epreuve->id == 15)
<a href="{{url('classement15/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Voir les résultats</a>
@else

@endif
  </div>
</div>

@endsection