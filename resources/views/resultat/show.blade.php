@extends('template')
@section('title') Résultat @endsection
@section('content')

<i> <img src="../../{{$resultat->pdp}}" width="50" height="50" />  </i>
<strong>{{$resultat->NomEquipe}}</strong>
{{$resultat->Slogan}}<br/>
<p></p>
<a href="{{url('resultat/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Retour aux résultats</a>
@endsection