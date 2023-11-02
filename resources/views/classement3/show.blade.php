@extends('template')
@section('title') Affichage du classement @endsection
@section('content')
<i></i>
<strong>{{$classement3->idEquipe3}}</strong>
<br/>
<a href="{{url('classement3/')}}">Retour à la liste</a>
@endsection