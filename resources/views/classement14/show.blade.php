@extends('template')
@section('title') Equipe numéro {{$classement14->id}} @endsection
@section('content')
<i></i>
<strong>{{$classement14->idEquipeC14}}</strong>
<br/>
<a href="{{url('classement14/')}}">Retour à la liste</a>
@endsection