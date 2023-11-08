@extends('template')

@section('content')

<i></i>

<strong>Nom de l'équipe:</strong> <p style="text-align:right; ">{{$classement2->equipe->NomEquipe}}</p>

<strong>Slogan: </strong><p style="text-align:right; ">{{$classement2->equipe->Slogan }}</p>
<br>
<a href="{{url('classement2/')}}" class="button-32">Retour à la liste</a>

@endsection