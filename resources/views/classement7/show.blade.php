@extends('template')
@section('title') Affichage du classement @endsection
@section('content')
<i></i>
<strong>{{$classement7->idEquipeC7}}</strong>
<br/>
<a href="{{url('classement7/')}}">Retour à la liste</a>
@endsection