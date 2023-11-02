@extends('template')
@section('title') Jeux de l'URCA @endsection
@section('content')
<form id="formLogout" action="{{url('/logout')}}" method="POST">
  @csrf
</form>
<div class="d-flex justify-content-center">
  <span>
   
@auth
   
    <button type="submit" form="formLogout" class="btn btn-sm btn-danger mb-2 mr-2">
      Déconnexion
    </button>
@else
    <a href="{{ url('/login') }}" class="btn btn-sm btn-primary mb-2 mr-2">
      Connexion
    </a>

@endauth
 </span>
</div>
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
    <li class="list-group-epreuve d-flex align-epreuves-center">
      <div class="col-lg-10">
        <span class="">
    <img src="{{$epreuve->img}}"  width="50" height="50" />
        </span>
        <strong>{{$epreuve->title}}</strong>
        @if(strlen($epreuve->description) > 200)
          {{substr($epreuve->description, 0, 200)}}...
        @else
          {{$epreuve->description}}
        @endif
      </div> 
         
      <div class="col text-end">
        <a href="{{route('epreuve.show', $epreuve->id)}}" class="btn btn-sm btn-primary mb-1"><i class="bi bi-eye"></i></a>
        @auth 
        <a href="{{route('epreuve.edit',$epreuve->id)}}" class="btn btn-sm btn-primary mb-1">
  <i class="bi bi-pencil-square"></i>
</a>
<button type="submit" formaction="{{route('epreuve.destroy', $epreuve->id)}}" form="deleteForm" class="btn btn-sm btn-danger mb-1">
  <i class="bi bi-trash"></i>
</button>
      </div>
      
      @endauth
    </li>
@endforeach
  </ul>
  @auth
    <div class="d-flex justify-content-center">
  <a href="{{route('resultat.create')}}" class="btn btn-sm btn-primary mb-1">
    Création d'une nouvelle équipe
  </a>
</div>
@endauth  
@endsection