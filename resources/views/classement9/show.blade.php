@extends('template')
@section('title')  Equipe numéro {{$classement9->id}} @endsection
@section('content')

<i></i>
<strong>Numéro de l'équipe: </strong> <p style="text-align:right; ">{{$classement9->idEquipec9}}</p>

<strong>Nom de l'équipe:</strong> <p style="text-align:right; ">{{$classement9->equipe->NomEquipe}}</p>

<strong>Slogan: </strong><p style="text-align:right; ">{{$classement9->equipe->Slogan }}</p>
<br>
<a href="{{url('classement9/')}}">Retour à la liste</a>

@endsection