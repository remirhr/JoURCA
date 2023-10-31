@extends('template')
@section('title') Résultat @endsection
@section('content')
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
<i> <img src="../../{{$path}}" width="50" height="50" />  </i>
<strong>{{$resultat->NomEquipe}}</strong>
{{$resultat->Slogan}}<br/>
<p></p>
<a href="{{url('resultat/')}}" class="btn btn-sm btn-primary mb-2 mr-2">Retour aux résultats</a>
@endsection