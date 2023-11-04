@extends('template')
@section('title')  Equipe numéro {{$classement3->id}} @endsection
@section('content')

<i></i>
<strong>Numéro de l'équipe: </strong> <p style="text-align:right; ">{{$classement3->idEquipeC3}}</p>

<strong>Nom de l'équipe:</strong> <p style="text-align:right; ">{{$classement3->equipe->NomEquipe}}</p>

<strong>Slogan: </strong><p style="text-align:right; ">{{$classement3->equipe->Slogan }}</p>
<br>
<a href="{{url('classement3/')}}">Retour à la liste</a>

@endsection