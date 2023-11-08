@extends('template')
@section('title')@endsection
@section('content')
@section('head')

<script
  src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
  integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
  crossorigin="anonymous"></script>
<script src="{{asset('storage/js/categories.js')}}"></script>
@endsection
<form id="formLogout" action="{{url('/logout')}}" method="POST">
  @csrf
</form>
<div class="d-flex justify-content-center">
  <div class="row">
    <div class="offset-sm-3 col-sm-6 mb-3 rounded border border-secondary">
      <strong id="title"></strong><br/>
      <img id="img" height="50px" width="50px">
    
    </div>
  </div>
</div>
&nbsp;
  
<div class="d-flex justify-content-center">
  <span>
   
@auth
@can('admin')
   <!--btn btn-sm btn-primary mb-2 mr-2-->
   <a href="{{url('resultat/')}}" class="button-34">
    Equipes
  </a>
  @endcan
  @can('orga')
   <!--btn btn-sm btn-primary mb-2 mr-2-->
   <a href="{{url('resultat/')}}" class="button-34">
    Equipes
  </a>
  @endcan
  &nbsp;
  &nbsp;
    <button type="submit" form="formLogout" class="button-32">
      Déconnexion
    </button>
    &nbsp;
    @can('admin')
  <a href="{{url('participant/')}}" class="button-34">
    Participants
  </a>
  @endcan
  @can('orga')
  <a href="{{url('participant/')}}" class="button-34">
    Participants
  </a>
  @endcan



@else
    <a href="{{ url('/login') }}" class="button-34">
      Connexion
    </a>

@endauth
 </span>
 &nbsp;
  
</div>
 
 &nbsp;
  
  <form id="deleteForm" action="" method="POST">
  @method('DELETE')
  @csrf
</form>
&nbsp;
<div stye="border-color:black; margin:5px;" class="row row-cols-1 row-cols-md-4 g-4 d-flex justify-content-center">
@foreach($epreuveList as $epreuve)

&nbsp;

<div class="col " style="display: flex;border-radius:25px; margin-bottom:30px;margin-left:20px; margin-right:20px; " >
  <div class="hover" style="display: flex; ">
    <div class="card" style="display: flex;border-radius:25px;">
      <img src="{{$epreuve->img}}" class="card-img-top" style="border-radius:25px;"height="300px">
      <div class="card-body" style="border-radius:25px;">
          @if($epreuve->id == 1)
<a href="{{url('classement1/')}}" style="color:white;" class="stretched-link ">Voir les résultats</a>
@elseif($epreuve->id == 2)
<a href="{{url('classement2/')}}" style="color:white;" class="stretched-link ">Voir les résultats</a>
@elseif($epreuve->id == 3)
<a href="{{url('classement3/')}}" style="color:white;" class="stretched-link ">Voir les résultats</a>
@elseif($epreuve->id == 4)
<a href="{{url('classement4/')}}" style="color:white;" class="stretched-link ">Voir les résultats</a>
@elseif($epreuve->id == 5)
<a href="{{url('classement5/')}}" style="color:white;" class="stretched-link ">Voir les résultats</a>
@elseif($epreuve->id == 6)
<a href="{{url('classement6/')}}" style="color:white;" class="stretched-link ">Voir les résultats</a>
@elseif($epreuve->id == 7)
<a href="{{url('classement7/')}}" style="color:white;" class="stretched-link ">Voir les résultats</a>
@elseif($epreuve->id == 8)
<a href="{{url('classement8/')}}" style="color:white;" class="stretched-link ">Voir les résultats</a>
@elseif($epreuve->id == 9)
<a href="{{url('classement9/')}}" style="color:white;" class="stretched-link ">Voir les résultats</a>
@elseif($epreuve->id == 10)
<a href="{{url('classement10/')}}" style="color:white;" class="stretched-link ">Voir les résultats</a>
@elseif($epreuve->id == 11)
<a href="{{url('classement11/')}}" style="color:white;" class="stretched-link ">Voir les résultats</a>
@elseif($epreuve->id == 12)
<a href="{{url('classement12/')}}" style="color:white;" class="stretched-link ">Voir les résultats</a>
@elseif($epreuve->id == 13)
<a href="{{url('classement13/')}}" style="color:white;" class="stretched-link ">Voir les résultats</a>
@elseif($epreuve->id == 14)
<a href="{{url('classement14/')}}" style="color:white;" class="stretched-link ">Voir les résultats</a>
@elseif($epreuve->id == 15)
<a href="{{url('classement15/')}}" style="color:white;" class="stretched-link ">Voir les résultats</a>
@else

@endif
   
      <!---webkit-text-stroke-width: 0.85px; -webkit-text-stroke-color: #440500;-->
        <h5 class="card-title" style="color:#FD411C; font-size:25px; "><strong>{{$epreuve->title}}</strong></h5>
        <p class="card-text">{{$epreuve->description}}</p>
      </div>
</div>
    </div>
  
       
        @auth 
        @can('admin')
        <a href="{{route('epreuve.edit',$epreuve->id)}}" class="btn btn-sm btn-primary mb-1">
        <i class="bi bi-vector-pen"></i>
</a>
@endcan
@can('orga')
        <a href="{{route('epreuve.edit',$epreuve->id)}}" class="btn btn-sm btn-primary mb-1">
        <i class="bi bi-vector-pen"></i>
</a>
@endcan
@endauth
  </div>

@endforeach
@auth
@can('admin')
<a href="{{url('register')}}" class="button-34">
    Créer un login 
  </a>
  @endcan
  @endauth
  &nbsp;
  
  
@endsection
@section('javaScript')
function recherche() {
    let requete = $.ajax({
        "type" : "GET",
        "url" : "{{ url('/composantes/random') }}",
        "dataType": "json"
        });
    requete.fail(function (jqXHR, textStatus, errorThrown){
            console.log(jqXHR);
        });
    requete.done(function (response, textStatus, jqXHR) {
        $('#title').text(response['title']);
        const image = new Image(); image. src = "../$('#img')"; image
        let img = image;
        img.img(response['image']);
       $('#img').img(response['image']);
        setTimeout(recherche, 3000);
    });
    
}
$(document).ready(function (){
    recherche();
  });
@endsection