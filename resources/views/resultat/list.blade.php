@extends('template')
@section('title') Liste des équipes  @endsection
@section('content')

  <ul class="list-group">
  <form id="deleteForm" action="" method="POST">
  @method('DELETE')
  @csrf
</form>
@foreach($resultatList as $resultat)
<?php 
$comp=$resultat->idComposante;
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
    <li class="list-group-resultat d-flex align-resultats-center">
      <div class="col-lg-10">
        <span class="">
        <img src="../{{$path}}"  width="50" height="50" />
        </span>
        <strong>{{$resultat->NomEquipe}}</strong>
        @if(strlen($resultat->Slogan) > 100)
          {{substr($resultat->Slogan, 0, 100)}}...
        @else
          {{$resultat->Slogan}}
        @endif
      </div>      
      <div class="col text-end">
        <a href="{{route('resultat.show', $resultat->id)}}" class="btn btn-sm btn-primary mb-1"><i class="bi bi-eye"></i></a>
       @auth
        <a href="{{route('resultat.edit',$resultat->id)}}" class="btn btn-sm btn-primary mb-1">
  <i class="bi bi-pencil-square"></i>
  
</a>
<button type="submit" formaction="{{route('resultat.destroy', $resultat->id)}}" form="deleteForm" class="btn btn-sm btn-danger mb-1">
  <i class="bi bi-trash"></i>
</button>
      </div>

      @endauth
    </li>
    
@endforeach
  </ul>

  <br>

@auth 
    <br>
    <div class="d-flex justify-content-center">
  <a href="{{route('resultat.create')}}" class="button-54">
    Créer une équipe
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
  </ul> 
@endsection