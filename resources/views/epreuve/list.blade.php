@extends('template')
@section('title') Epreuves @endsection
@section('content')
<!--<div class="d-flex justify-content-center">
  <a href="{{route('item.create')}}" class="btn btn-sm btn-primary mb-1">
    Création d'un nouvel article
  </a>
</div>-->
  <ul class="list-group">
  <form id="deleteForm" action="" method="POST">
  @method('DELETE')
  @csrf
</form>
@foreach($EpreuveList as $epreuve)
    <li class="list-group-item d-flex align-items-center">
      <div class="col-lg-10">
        <span class="badge rounded-pill bg-primary">
        {{$epreuve->img}} 
        </span>
        <strong>{{$epreuve->title}}</strong>
        @if(strlen($epreuve->description) > 50)
          {{substr($epreuve->description, 0, 50)}}...
        @else
          {{$epreuve->description}}
        @endif
      </div>      
      <div class="col text-end">
        <a href="{{route('epreuve.show', $epreuve->id)}}" class="btn btn-sm btn-primary mb-1"><i class="bi bi-eye"></i></a>
        <a href="{{route('item.edit',$item->id)}}" class="btn btn-sm btn-primary mb-1">
  <i class="bi bi-pencil-square"></i>
</a>
<button type="submit" formaction="{{route('item.destroy', $item->id)}}" form="deleteForm" class="btn btn-sm btn-danger mb-1">
  <i class="bi bi-trash"></i>
</button>
      </div>
    </li>
@endforeach
  </ul>
@endsection