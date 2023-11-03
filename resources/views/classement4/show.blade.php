@extends('template')
@section('title') Equipe numéro {{$classement4->id}} @endsection
@section('content')
<i></i>
<strong>{{$classement4->idEquipeC4}}</strong>
<br/>
<a href="{{url('classement4/')}}">Retour à la liste</a>
@endsection