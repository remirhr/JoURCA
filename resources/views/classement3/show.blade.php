@extends('template')

@section('content')

<i></i>


<strong>Slogan: </strong><p style="text-align:right; ">{{$classement3->equipe->Slogan }}</p>
<br>
<a href="{{url('classement3/')}}" class="button-32">Retour à la liste</a>

@endsection