@extends('template')
@section('title') Podium @endsection
@section('content')
  <ul class="list-group">
  <form id="deleteForm" action="" method="POST">
  @method('DELETE')
  @csrf
</form>
@foreach($classement8List as $classement8)
    <li class="list-group-item d-flex align-items-center">
      <div class="col-lg-10">
        <span class="badge rounded-pill bg-primary">
        {{$classement8->id}} 
        </span>
        <strong></strong>
       
      </div>      
      <div class="col text-end">
        <a href="{{route('classement8.show', $classement8->id)}}" class="btn btn-sm btn-primary mb-1"><i class="bi bi-eye"></i></a>
      </div>
      @auth
      <a href="{{route('classement8.edit',$classement8->id)}}" class="btn btn-sm btn-primary mb-1">
  <i class="bi bi-pencil-square"></i>
  @endauth
  
</a>
<!--
<button type="submit" formaction="{{route('classement8.destroy', $classement8->id)}}" form="deleteForm" class="btn btn-sm btn-danger mb-1">
  <i class="bi bi-trash"></i>
</button>-->
    </li>
@endforeach
  </ul>
 
@endsection