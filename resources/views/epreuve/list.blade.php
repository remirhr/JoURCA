@extends('template')
@section('title') Jeux de l'URCA @endsection

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
   <!--btn btn-sm btn-primary mb-2 mr-2-->
   <a href="{{url('resultat/')}}" class="button-54">
    Equipes
  </a>
  &nbsp;
  &nbsp;
    <button type="submit" form="formLogout" class="button-red">
      Déconnexion
    </button>
    &nbsp;
  <a href="{{url('participant/')}}" class="button-54">
    Participants
  </a>



@else
    <a href="{{ url('/login') }}" class="button-54">
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

<div class="row row-cols-1 row-cols-md-4 g-4">
@foreach($epreuveList as $epreuve)

&nbsp;

   
<div class="col">
    <div class="card">
      <img src="{{$epreuve->img}}" class="card-img-top" height="300px">
      <div class="card-body">
        <h5 class="card-title"><strong>{{$epreuve->title}}</strong></h5>
        <p class="card-text">{{$epreuve->description}}</p>
      </div>
       <a href="{{route('epreuve.show', $epreuve->id)}}" class="btn btn-sm btn-primary mb-1"><i class="bi bi-eye"></i></a>
        @auth 
        <a href="{{route('epreuve.edit',$epreuve->id)}}" class="btn btn-sm btn-primary mb-1">
  <i class="bi bi-pencil-square"></i>
</a>
@endauth
    </div>
  </div>
      

    
@endforeach

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