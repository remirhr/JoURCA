@extends('template')
@section('title')  Equipe numéro {{$classement5->id}} @endsection
@section('content')

<i></i>
<strong>Numéro de l'équipe: </strong> <p style="text-align:right; ">{{$classement5->idEquipeC5}}</p>

<strong>Nom de l'équipe:</strong> <p style="text-align:right; ">{{$classement5->equipe->NomEquipe}}</p>

<strong>Slogan: </strong><p style="text-align:right; ">{{$classement5->equipe->Slogan }}</p>
<br>
<a href="{{url('classement5/')}}">Retour à la liste</a>

@endsection