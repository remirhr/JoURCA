@extends('template')
@section('title')  Equipe numéro {{$classement12->id}} @endsection
@section('content')

<i></i>
<strong>Numéro de l'équipe: </strong> <p style="text-align:right; ">{{$classement12->idEquipec12}}</p>

<strong>Nom de l'équipe:</strong> <p style="text-align:right; ">{{$classement12->equipe->NomEquipe}}</p>

<strong>Slogan: </strong><p style="text-align:right; ">{{$classement12->equipe->Slogan }}</p>
<br>
<a href="{{url('classement12/')}}">Retour à la liste</a>

@endsection