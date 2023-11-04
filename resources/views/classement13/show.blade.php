@extends('template')
@section('title')  Equipe numéro {{$classement13->id}} @endsection
@section('content')

<i></i>
<strong>Numéro de l'équipe: </strong> <p style="text-align:right; ">{{$classement13->idEquipec13}}</p>

<strong>Nom de l'équipe:</strong> <p style="text-align:right; ">{{$classement13->equipe->NomEquipe}}</p>

<strong>Slogan: </strong><p style="text-align:right; ">{{$classement13->equipe->Slogan }}</p>
<br>
<a href="{{url('classement13/')}}">Retour à la liste</a>

@endsection