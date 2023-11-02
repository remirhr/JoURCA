@extends('template')
@section('title') Affichage du classement @endsection
@section('content')
<i></i>
<strong>{{$classement2->idEquipeC2}}</strong>
<br/>
<a href="{{url('classement2/')}}">Retour à la liste</a>
@endsection