@extends('template')
@section('title')  Equipe numéro {{$classement6->id}} @endsection
@section('content')

<i></i>
<strong>Nom de l'équipe:</strong> <p style="text-align:right; ">{{$classement6->equipe->NomEquipe}}</p>

<strong>Slogan: </strong><p style="text-align:right; ">{{$classement6->equipe->Slogan }}</p>
<br>
<a href="{{url('classement6/')}}">Retour à la liste</a>

@endsection