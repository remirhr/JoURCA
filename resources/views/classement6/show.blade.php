@extends('template')
@section('title') Equipe numéro {{$classement6->id}} @endsection
@section('content')
<i></i>
<strong>{{$classement6->idEquipeC6}}</strong>
<br/>
<a href="{{url('classement6/')}}">Retour à la liste</a>
@endsection