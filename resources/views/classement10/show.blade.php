@extends('template')
@section('title') Equipe numéro {{$classement10->id}} @endsection
@section('content')
<i></i>
<strong>{{$classement10->idEquipeC10}}</strong>
<br/>
<a href="{{url('classement10/')}}">Retour à la liste</a>
@endsection