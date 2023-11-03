@extends('template')
@section('title') Affichage du classement @endsection
@section('content')
<i></i>
<strong>{{$classement6->idEquipeC6}}</strong>
<br/>
<a href="{{url('classement6/')}}">Retour à la liste</a>
@endsection