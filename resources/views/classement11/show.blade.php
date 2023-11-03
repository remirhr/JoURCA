@extends('template')
@section('title') Equipe numéro {{$classement11->id}} @endsection
@section('content')
<i></i>
<strong>{{$classement11->idEquipeC11}}</strong>
<br/>
<a href="{{url('classement11/')}}">Retour à la liste</a>
@endsection