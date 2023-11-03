@extends('template')
@section('title') Equipe numéro {{$classement15->id}} @endsection
@section('content')
<i></i>
<strong>{{$classement15->idEquipeC15}}</strong>
<br/>
<a href="{{url('classement15/')}}">Retour à la liste</a>
@endsection