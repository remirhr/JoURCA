@extends('template')
@section('title')  Equipe numéro {{$classement1->id}} @endsection
@section('content')

<i></i>

<strong>Nom de l'équipe:</strong> <p style="text-align:right; ">{{$classement1->equipe->NomEquipe}}</p>

<strong>Slogan: </strong><p style="text-align:right; ">{{$classement1->equipe->Slogan }}</p>
<br>
<a href="{{url('classement1/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Retour à la liste</a>

@endsection