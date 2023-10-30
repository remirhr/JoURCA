@extends('template')
@section('title') Epreuves de la semaine 1 @endsection
@section('content')
<!--<div class="d-flex justify-content-center">
  <a href="{{route('epreuve.create')}}" class="btn btn-sm btn-primary mb-1">
    Création d'un nouvel article
  </a>
</div>-->
<!--
            $picture1=$_FILES['public/img/handball.png'];
            $picture2=$_FILES['public/img/sumo.png'];
            $picture3=$_FILES['public/img/touchrubgy.png'];
            $picture4=$_FILES['public/img/laserrun.png'];
            $picture5=$_FILES['public/img/futsal.png'];
            $picture6=$_FILES['public/img/paletsbretons.png'];
            $picture7=$_FILES['public/img/finale.png'];
            $picture8=$_FILES['public/img/badminton.png'];
            $picture9=$_FILES['public/img/crossfit.png'];
            $picture10=$_FILES['public/img/volley.png'];

            $picture11=$_FILES['public/img/relais.png'];
            $picture12=$_FILES['public/img/esport.png'];
            $picture13=$_FILES['public/img/basket.png'];
            $picture14=$_FILES['public/img/escalade.png'];
            $picture15=$_FILES['public/img/finale.png'];-->
              <ul class="list-group">
  <form id="deleteForm" action="" method="POST">
  @method('DELETE')
  @csrf
</form>
@foreach($epreuveList as $epreuve)
    <li class="list-group-item d-flex align-items-center">
      <div class="col-lg-10">
        <span class="">
    <img src="{{$epreuve->img}}"  />
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
        <a href="{{route('epreuve.edit',$epreuve->id)}}" class="btn btn-sm btn-primary mb-1">
  <i class="bi bi-pencil-square"></i>
</a>
<button type="submit" formaction="{{route('epreuve.destroy', $epreuve->id)}}" form="deleteForm" class="btn btn-sm btn-danger mb-1">
  <i class="bi bi-trash"></i>
</button>
      </div>
    </li>
@endforeach
  </ul>
@endsection