@extends('template')
@section('title') {{$epreuve->title}} @endsection
@section('content')
<i> <img src="../{{$epreuve->img}}"  /> </i>
<strong>{{$epreuve->title}}</strong>
{{$epreuve->description}}<br/>
<a href="{{url('epreuve/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Retour à la liste</a>
@endsection