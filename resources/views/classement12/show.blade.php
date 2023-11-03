@extends('template')
@section('title') Equipe numéro {{$classement12->id}} @endsection
@section('content')
<i></i>
<strong>{{$classement12->idEquipeC12}}</strong>
<br/>
<a href="{{url('classement12/')}}">Retour à la liste</a>
@endsection