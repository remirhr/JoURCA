@extends('template')
@section('title') Affichage du classement @endsection
@section('content')
<i></i>
<strong>{{$classement8->idEquipeC8}}</strong>
<br/>
<a href="{{url('classement8/')}}">Retour à la liste</a>
@endsection