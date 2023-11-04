@extends('template')
@section('title') Podium @endsection
@section('content')
  <ul class="list-group">
  <form id="deleteForm" action="" method="POST">
  @method('DELETE')
  @csrf
</form>
@foreach($classement14List as $classement14)
    <li class="list-group-item d-flex align-items-center">
      <div class="col-lg-14">
        <span class="badge rounded-pill bg-primary">
        {{$classement14->id}} 
        </span>
        <strong></strong>
       
      </div>      
      <div class="col text-end">
        <a href="{{route('classement14.show', $classement14->id)}}" class="btn btn-sm btn-primary mb-1"><i class="bi bi-aspect-ratio"></i></a>
      </div>
      &nbsp;
      @auth
      <a href="{{route('classement14.edit',$classement14->id)}}" class="btn btn-sm btn-primary mb-1">
  <i class="bi bi-vector-pen"></i>
  @endauth
</a>
<!--
<button type="submit" formaction="{{route('classement14.destroy', $classement14->id)}}" form="deleteForm" class="btn btn-sm btn-danger mb-1">
  <i class="bi bi-trash"></i>
</button>-->
    </li>
@endforeach
  </ul>
 
@endsection