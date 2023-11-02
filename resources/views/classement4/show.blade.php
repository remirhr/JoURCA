@extends('template')
@section('title') Affichage du classement @endsection
@section('content')
<i></i>
<strong>{{$classement4->idEquipeC4}}</strong>
<br/>
<a href="{{url('classement4/')}}">Retour à la liste</a>
@endsection