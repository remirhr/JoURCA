@extends('template')
@section('title')  Equipe numéro {{$classement1->id}} @endsection
@section('content')
<i></i>
<strong>{{$classement1->idEquipeC}}</strong>
<br/>
<a href="{{url('classement1/')}}">Retour à la liste</a>
@endsection