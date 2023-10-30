@extends('template')
@section('title') {{$epreuve->title}} @endsection
@section('content')
<i> <img src="../{{$epreuve->img}}"  /> </i>
<strong>{{$epreuve->title}}</strong>
{{$epreuve->description}}<br/>
<a href="{{url('epreuve/')}}">Retour aux résultats</a>
@endsection