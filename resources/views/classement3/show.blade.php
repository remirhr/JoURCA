@extends('template')
@section('title')  Equipe numéro {{$classement3->id}} @endsection
@section('content')
<i></i>
<strong>{{$classement3->idEquipeC3}}</strong>
<br/>
<a href="{{url('classement3/')}}">Retour à la liste</a>
@endsection