@extends('template')
@section('title') Affichage du classement @endsection
@section('content')
<i></i>
<strong>{{$classement1->idEquipeC}}</strong>
<br/>
<a href="{{url('classement1/')}}">Retour à la liste</a>
@endsection