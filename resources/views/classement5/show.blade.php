@extends('template')
@section('title') Affichage du classement @endsection
@section('content')
<i></i>
<strong>{{$classement5->idEquipeC5}}</strong>
<br/>
<a href="{{url('classement5/')}}">Retour à la liste</a>
@endsection