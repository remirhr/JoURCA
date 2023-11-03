@extends('template')
@section('title') Podium @endsection
@section('content')
  <ul class="list-group">
  <form id="deleteForm" action="" method="POST">
  @method('DELETE')
  @csrf
</form>
@foreach($classement2List as $classement2)
    <li class="list-group-item d-flex align-items-center">
      <div class="col-lg-10">
        <span class="badge rounded-pill bg-primary">
        {{$classement2->id}} 
        </span>
        <strong></strong>
       
      </div>      
      <div class="col text-end">
        <a href="{{route('classement2.show', $classement2->id)}}" class="btn btn-sm btn-primary mb-1"><i class="bi bi-eye"></i></a>
      </div>
      @auth
      <a href="{{route('classement2.edit',$classement2->id)}}" class="btn btn-sm btn-primary mb-1">
  <i class="bi bi-pencil-square"></i>
  @endauth
</a>
<!--
<button type="submit" formaction="{{route('classement2.destroy', $classement2->id)}}" form="deleteForm" class="btn btn-sm btn-danger mb-1">
  <i class="bi bi-trash"></i>
</button>-->
    </li>
@endforeach
  </ul>
 
@endsection