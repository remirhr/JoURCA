@extends('template')

@section('content')

<i></i>
<strong>Nom de l'équipe:</strong> <p style="text-align:right; ">{{$classement5->equipe->NomEquipe}}</p>

<strong>Slogan: </strong><p style="text-align:right; ">{{$classement5->equipe->Slogan }}</p>
<br>
<a href="{{url('classement5/')}}" class="button-32">Retour à la liste</a>

@endsection