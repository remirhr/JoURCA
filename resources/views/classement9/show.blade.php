@extends('template')
@section('title') Equipe numéro {{$classement9->id}} @endsection
@section('content')
<i></i>
<strong>{{$classement9->idEquipeC9}}</strong>
<br/>
<a href="{{url('classement9/')}}">Retour à la liste</a>
@endsection