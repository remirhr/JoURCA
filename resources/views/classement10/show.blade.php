@extends('template')
@section('title')  Equipe numéro {{$classement10->id}} @endsection
@section('content')

<i></i>
<strong>Numéro de l'équipe: </strong> <p style="text-align:right; ">{{$classement10->idEquipec10}}</p>

<strong>Nom de l'équipe:</strong> <p style="text-align:right; ">{{$classement10->equipe->NomEquipe}}</p>

<strong>Slogan: </strong><p style="text-align:right; ">{{$classement10->equipe->Slogan }}</p>
<br>
<a href="{{url('classement10/')}}">Retour à la liste</a>

@endsection