@extends('template')
@section('title') Epreuves @endsection
@section('content')
  <ul class="list-group">
@foreach($EpreuveList as $Epreuve)
    <li class="list-group-item d-flex align-items-center">
      <div class="col-lg-10">
        <span class="badge rounded-pill bg-primary">
        {{$Epreuve->img}} 
        </span>
        <strong>{{$Epreuve->title}}</strong>
        @if(strlen($Epreuve->description) > 50)
          {{substr($Epreuve->description, 0, 50)}}...
        @else
          {{$Epreuve->description}}
        @endif
      </div>      
      <div class="col text-end">
        <a href="{{route('epreuve.show', $Epreuve->id)}}" class="btn btn-sm btn-primary mb-1"><i class="bi bi-eye"></i></a>
      </div>
    </li>
@endforeach
  </ul>
@endsection