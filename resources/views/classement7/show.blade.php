@extends('template')
@section('title')  Equipe numéro {{$classement7->id}} @endsection
@section('content')

<i></i>
<strong>Numéro de l'équipe: </strong> <p style="text-align:right; ">{{$classement7->idEquipec7}}</p>

<strong>Nom de l'équipe:</strong> <p style="text-align:right; ">{{$classement7->equipe->NomEquipe}}</p>

<strong>Slogan: </strong><p style="text-align:right; ">{{$classement7->equipe->Slogan }}</p>
<br>
<a href="{{url('classement7/')}}">Retour à la liste</a>

@endsection