@extends('template')
@section('title') Epreuve @endsection
@section('content')
<i>Logo : {{$Epreuve->img}} €</i>
<strong>{{$Epreuve->title}}</strong>
{{$Epreuve->description}}<br/>
<a href="{{url('epreuve/')}}">Retour aux résultats</a>
@endsection