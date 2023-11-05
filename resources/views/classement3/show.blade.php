@extends('template')
@section('title')  Equipe numéro {{$classement3->id}} @endsection
@section('content')

<i></i>


<strong>Slogan: </strong><p style="text-align:right; ">{{$classement3->equipe->Slogan }}</p>
<br>
<a href="{{url('classement3/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Retour à la liste</a>

@endsection