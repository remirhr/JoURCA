@extends('template')
@section('title') {{$epreuve->title}} @endsection
@section('content')

<i> <img src="../{{$epreuve->img}}" width="50" height="50" /> </i>
<strong>{{$epreuve->title}}</strong>
{{$epreuve->description}}<br/>
<p></p>
<a href="{{url('epreuve/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Retour à la liste</a>
<a href="{{url('resultat/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Voir les résultats</a>
@endsection