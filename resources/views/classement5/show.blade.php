@extends('template')
@section('title') Equipe numéro {{$classement5->id}} @endsection
@section('content')
<i></i>
<strong>{{$classement5->idEquipeC5}}</strong>
<br/>
<a href="{{url('classement5/')}}">Retour à la liste</a>
@endsection