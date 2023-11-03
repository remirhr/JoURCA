@extends('template')
@section('title')  Equipe numéro {{$classement2->id}} @endsection
@section('content')
<i></i>
<strong>{{$classement2->idEquipeC2}}</strong>
<br/>
<a href="{{url('classement2/')}}">Retour à la liste</a>
@endsection