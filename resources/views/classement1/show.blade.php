@extends('template')
@section('title')  Equipe numéro {{$classement1->id}} @endsection
@section('content')
<i></i>
Numéro de l'équipe: <strong>{{$classement1->idEquipeC}}</strong>
<br>
Nom de l'équipe:<strong> {{$classement1->NomEquipe}}</strong>
<br/>
<a href="{{url('classement1/')}}">Retour à la liste</a>
@endsection