@extends('template')
@section('title') Equipe numéro {{$classement13->id}} @endsection
@section('content')
<i></i>
<strong>{{$classement13->idEquipeC13}}</strong>
<br/>
<a href="{{url('classement13/')}}">Retour à la liste</a>
@endsection