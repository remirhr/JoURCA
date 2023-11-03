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
        <a href="{{route('participant.show', $participant->idParticipant)}}" class="btn btn-sm btn-primary mb-1"><i class="bi bi-eye"></i></a>
        @auth 
        <a href="{{route('participant.edit',$participant->idParticipant)}}" class="btn btn-sm btn-primary mb-1">
  <i class="bi bi-pencil-square"></i>
</a>
<button type="submit" formaction="{{route('participant.destroy', $participant->idParticipant)}}" form="deleteForm" class="btn btn-sm btn-danger mb-1">
  <i class="bi bi-trash"></i>
</button>
      </div>
      
      @endauth
    </li>
    @auth 
    <div class="d-flex justify-content-center">
  <a href="{{route('participant.create')}}" class="btn btn-sm btn-primary mb-1">
    Créer un participant
  </a>
  <p> </p>
  
</div>

@endauth
<div class="d-flex justify-content-center">
<a href="{{url('epreuve/')}}" class="btn btn-danger mb-1">Retour</a>
                                                      </div>
@endforeach
  </ul> 
@endsection