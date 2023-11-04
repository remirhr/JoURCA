@extends('template')
@section('title')  Equipe numéro {{$classement8->id}} @endsection
@section('content')

<i></i>
<strong>Numéro de l'équipe: </strong> <p style="text-align:right; ">{{$classement8->idEquipec8}}</p>

<strong>Nom de l'équipe:</strong> <p style="text-align:right; ">{{$classement8->equipe->NomEquipe}}</p>

<strong>Slogan: </strong><p style="text-align:right; ">{{$classement8->equipe->Slogan }}</p>
<br>
<a href="{{url('classement8/')}}">Retour à la liste</a>

@endsection