@extends('template')
@section('title') Podium @endsection
@section('content')
  <ul class="list-group">
  <form id="deleteForm" action="" method="POST">
  @method('DELETE')
  @csrf
</form>
@foreach($classement5List as $classement5)
    <li class="list-group-item d-flex align-items-center">
      <div class="col-lg-10">
        <span class="badge rounded-pill bg-primary">
        {{$classement5->id}} 
        </span>
        <strong></strong>
       
      </div>      
      <div class="col text-end">
        <a href="{{route('classement5.show', $classement5->id)}}" class="btn btn-sm btn-primary mb-1"><i class="bi bi-aspect-ratio"></i></a>
      </div>
      &nbsp;
      @auth
      <a href="{{route('classement5.edit',$classement5->id)}}" class="btn btn-sm btn-primary mb-1">
  <i class="bi bi-vector-pen"></i>
  @endauth
</a>
<!--
<button type="submit" formaction="{{route('classement5.destroy', $classement5->id)}}" form="deleteForm" class="btn btn-sm btn-danger mb-1">
  <i class="bi bi-trash"></i>
</button>-->
    </li>
@endforeach
  </ul>
 
@endsection