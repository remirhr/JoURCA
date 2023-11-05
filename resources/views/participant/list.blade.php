@extends('template')
@section('title') Listes des participants @endsection
@section('content')


              <ul class="list-group">
  <form id="deleteForm" action="" method="POST">
  @method('DELETE')
  @csrf
</form>

@foreach($participantList as $participant)
<?php 
$comp=$participant->idComposante;
$path;
if($comp==1){
    $path="img/science.png";
}
elseif($comp==2){
$path= "img/lsh.png";
}
elseif($comp==3){
    $path= "img/eisine";
    }elseif($comp==4){
        $path= "img/sesg.jpeg";
        }elseif($comp==5){
            $path= "img/dsp.png";
            }elseif($comp==6){
                $path= "img/staps.png";
                }elseif($comp==7){
                    $path= "img/medecine.png";
                    }elseif($comp==8){
                        $path= "img/cdc.png";
                        }elseif($comp==9){
                            $path= "img/img/esireims.png";
                            }elseif($comp==10){
                                $path= "img/cdc.png";
                                }elseif($comp=11){
                                    $path= "img/pharma.jpeg'";
                                    }elseif($comp==12){
                                        $path= "img/institut.png";
                                        }elseif($comp==13){
                                            $path= "img/iutrcc.png";
                                            }elseif($comp==14){
                                                $path= "img/iuttroyes.png";
                                                }elseif($comp==15){
                                                    $path= "img/inspe.png";
                                                    }else{
                                                        $path= "img/cdc.png";
                                                        }
?>
<div class="hover">
    <li class="list-group-epreuve d-flex align-epreuves-center">
      <div class="col-lg-10">
        <span class="">
    <img src="../{{$path}}"  width="50" height="50" />
        </span>
        <strong>{{$participant->NomP}}</strong>
        <strong>{{$participant->PrenomP}}</strong>
    <br> Numéro étudiant : <strong>{{$participant->NumeroEtudiant}}</strong>
    <br>Date de naissance : <strong>{{$participant->DateDeNaissance}}</strong>
      </div> 
         
      <div class="col text-end">
      
        &nbsp;
                                                      </div>
        @auth 
        <a href="{{route('participant.edit',$participant->id)}}" class="btn btn-sm btn-primary mb-1">
        <i class="bi bi-vector-pen"></i>
</a>
<button type="submit" formaction="{{route('participant.destroy', $participant->id)}}" form="deleteForm" class="btn btn-sm btn-danger mb-1">
  <i class="bi bi-trash"></i>
</button>
      </div>
      
      @endauth
    </li>
    @auth 
    <br>
    <div class="d-flex justify-content-center">
  <a href="{{route('participant.create')}}" class="button-54">
    Créer un participant
  </a>
  <p> </p>
  <br>
</div>
<br>
@endauth
<div class="d-flex justify-content-center">
  <br>
<a href="{{url('epreuve/')}}" class="button-red">Retour</a>
                                                      </div>
@endforeach
  </ul> 
@endsection