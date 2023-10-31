@extends('template')
@section('title') Résultat @endsection
@section('content')
<?php 
int comp=$resultat->idComposante;
?>
<i> <img src="../../{{$resultat->composantes->img}}" width="50" height="50" />  </i>
<strong>{{$resultat->NomEquipe}}</strong>
{{$resultat->Slogan}}<br/>
<p></p>
<a href="{{url('resultat/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Retour aux résultats</a>
@endsection