@extends('template')

@section('content')

<i></i>

<strong>Nom de l'équipe:</strong> <p style="text-align:right; ">{{$classement15->equipe->NomEquipe}}</p>

<strong>Slogan: </strong><p style="text-align:right; ">{{$classement15->equipe->Slogan }}</p>
<br>
<a href="{{url('classement15/')}}" class="button-32">Retour à la liste</a>

@endsection