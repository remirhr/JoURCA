@extends('template')
@section('title')  Equipe numéro {{$classement14->id}} @endsection
@section('content')

<i></i>
<strong>Numéro de l'équipe: </strong> <p style="text-align:right; ">{{$classement14->idEquipec14}}</p>

<strong>Nom de l'équipe:</strong> <p style="text-align:right; ">{{$classement14->equipe->NomEquipe}}</p>

<strong>Slogan: </strong><p style="text-align:right; ">{{$classement14->equipe->Slogan }}</p>
<br>
<a href="{{url('classement14/')}}">Retour à la liste</a>

@endsection