@extends('template')
@section('title')  Equipe numéro {{$classement11->id}} @endsection
@section('content')

<i></i>
<strong>Numéro de l'équipe: </strong> <p style="text-align:right; ">{{$classement11->idEquipec11}}</p>

<strong>Nom de l'équipe:</strong> <p style="text-align:right; ">{{$classement11->equipe->NomEquipe}}</p>

<strong>Slogan: </strong><p style="text-align:right; ">{{$classement11->equipe->Slogan }}</p>
<br>
<a href="{{url('classement11/')}}">Retour à la liste</a>

@endsection