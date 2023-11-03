@extends('template')
@section('title') Equipe numéro {{$classement8->id}} @endsection
@section('content')
<i></i>
<strong>{{$classement8->idEquipeC8}}</strong>
<br/>
<a href="{{url('classement8/')}}">Retour à la liste</a>
@endsection