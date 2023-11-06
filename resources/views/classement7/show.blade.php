@extends('template')
@section('title')  Equipe numéro {{$classement7->id}} @endsection
@section('content')

<i></i>
<strong>Nom de l'équipe:</strong> <p style="text-align:right; ">{{$classement7->equipe->NomEquipe}}</p>

<strong>Slogan: </strong><p style="text-align:right; ">{{$classement7->equipe->Slogan }}</p>
<br>
<a href="{{url('classement7/')}}" class="button-32">Retour à la liste</a>

@endsection