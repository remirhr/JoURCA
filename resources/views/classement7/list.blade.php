@extends('template')
@section('title') Podium @endsection
@section('content')
  <ul class="list-group">
  <form id="deleteForm" action="" method="POST">
  @method('DELETE')
  @csrf
</form>
@foreach($classement7List as $classement7)
<div class="hover">
    <li class="list-group-item d-flex align-items-center">
      <div class="col-lg-10">
        <span class="">
       <?php
       $path;
       $comp=$classement7->id;
        if($comp==1){
          $path="img/medailleor.png";
        }
        elseif($comp==2){
          $path="img/medailleargent.png";
        }
        elseif($comp==3){
          $path="img/medaillebronze.png";
        }
        else{}
        
       ?>
       <img src="{{$path}}" width="50" height="50"/>
        </span>
        <strong></strong>
        <?php
        $img=$classement7->equipe->idComposante;
        $pathimg;
        if($img==1){
          $pathimg="img/science.png";
      }
      elseif($img==2){
      $pathimg= "img/lsh.png";
      }
      elseif($img==3){
          $pathimg= "img/eisine";
          }elseif($img==4){
              $pathimg= "img/sesg.jpeg";
              }elseif($img==5){
                  $pathimg= "img/dsp.png";
                  }elseif($img==6){
                      $pathimg= "img/staps.png";
                      }elseif($img==7){
                          $pathimg= "img/medecine.png";
                          }elseif($img==8){
                              $pathimg= "img/cdc.png";
                              }elseif($img==9){
                                  $pathimg= "img/img/esireims.png";
                                  }elseif($img==10){
                                      $pathimg= "img/cdc.png";
                                      }elseif($img==11){
                                          $pathimg= "img/pharma.jpeg'";
                                          }elseif($img==12){
                                              $pathimg= "img/institut.png";
                                              }elseif($img==13){
                                                  $pathimg= "img/iutrcc.png";
                                                  }elseif($img==14){
                                                      $pathimg= "img/iuttroyes.png";
                                                      }elseif($img==15){
                                                          $pathimg= "img/inspe.png";
                                                          }elseif($img==16){
                                                            $pathimg= "img/cdc.png";
                                                            }else{
                                                              $pathimg= "img/default.png";
                                                            }
        ?>
        <img src="{{$pathimg}}" width="50" height="50"/>
        <strong>{{$classement7->equipe->NomEquipe}}</strong>
        {{$classement7->equipe->Slogan}}
      </div>         
      <div class="col text-end">
        <a href="{{route('classement7.show', $classement7->id)}}" class="stretched-link"></a>
      </div>
      &nbsp;
      @auth
      @can('admin')
      <a href="{{route('classement7.edit',$classement7->id)}}" class="btn btn-sm btn-primary mb-1">
  <i class="bi bi-vector-pen"></i>
  @endcan
  @can('orga')
      <a href="{{route('classement7.edit',$classement7->id)}}" class="btn btn-sm btn-primary mb-1">
  <i class="bi bi-vector-pen"></i>
  @endcan
  @can('editor')
      <a href="{{route('classement7.edit',$classement7->id)}}" class="btn btn-sm btn-primary mb-1">
  <i class="bi bi-vector-pen"></i>
  @endcan
  @endauth

</a>
<!--
<button type="submit" formaction="{{route('classement1.destroy', $classement7->id)}}" form="deleteForm" class="btn btn-sm btn-danger mb-1">
  <i class="bi bi-trash"></i>
</button>-->
    </li>
                                                          </div>
@endforeach
<a href="{{url('epreuve/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Retour à la liste</a>
  </ul>
 
@endsection