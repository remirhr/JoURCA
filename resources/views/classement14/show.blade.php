@extends('template')
@section('title')  Equipe numéro {{$classement14->id}} @endsection
@section('content')

<i></i>

<strong>Nom de l'équipe:</strong> <p style="text-align:right; ">{{$classement14->equipe->NomEquipe}}</p>

<strong>Slogan: </strong><p style="text-align:right; ">{{$classement14->equipe->Slogan }}</p>
<br>
<a href="{{url('classement14/')}}" class="button-32">Retour à la liste</a>

@endsection