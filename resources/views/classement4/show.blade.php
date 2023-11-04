@extends('template')
@section('title')  Equipe numéro {{$classement4->id}} @endsection
@section('content')

<i></i>
<strong>Numéro de l'équipe: </strong> <p style="text-align:right; ">{{$classement4->idEquipeC4}}</p>

<strong>Nom de l'équipe:</strong> <p style="text-align:right; ">{{$classement4->equipe->NomEquipe}}</p>

<strong>Slogan: </strong><p style="text-align:right; ">{{$classement4->equipe->Slogan }}</p>
<br>
<a href="{{url('classement4/')}}">Retour à la liste</a>

@endsection