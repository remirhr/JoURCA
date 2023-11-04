<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\EpreuveResult;

class EpreuveResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::table('epreuve_results')->truncate();
        //EpreuveResult::create([
            DB::table('epreuve_results')->delete();
           /* $picture1=$_FILES['public/img/handball.png'];
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
            $picture15=$_FILES['public/img/finale.png'];*/
            
                $epreuve = [
                    [
              'title' => 'Handball 6/6',
              'description' => "Lundi 12 février de 18h à 22h, 8 équipes de 6 s'affronteront dans le GU (plateau C) CAMPUS MDH. Pas de tribunes disponibles",
              'img' => 'img/handball2.png'
        ],
        [
              'title' => 'Sumo',
              'description' => "Lundi 12 février de 18h à 22h, 6 équipes de 6 s'affronteront en salle de crossfit CAMPUS MDH.",
              'img' => 'img/sumo2.png'
        ],
        [
            'title' => 'Touch Rugby 4/4',
              'description' => "Mardi 13 février de 18h à 22h, 8 équipes de 4 s'affronteront CAMPUS MDH.",
              'img' => 'img/rugby2.png'
        ],
        [
            'title' => 'Laser Run',
              'description' => "Mardi 13 février de 18h à 22h, 6 équipes de 6 s'affronteront en extérieur ou salle principale 3 à 6 CAMPUS MDH.",
              'img' => 'img/laserrun2.png'
        ],
        [
            'title' => 'Futsal',
              'description' => "Mercredi 14 février de 18h à 22h, 8 équipes de 5 s'affronteront CAMPUS MDH.",
              'img' => 'img/futsal2.png'
        ],
        [
            'title' => 'Palets bretons',
            'description' => "Mercredi 14 février de 18h à 22h, 6 équipes s'affronteront en extérieur ou salle principale 3 à 6 CAMPUS MDH.",
            'img' => 'img/paletsbretons.png'
        ],
        [
            'title' => 'Finales',
            'description' => "Jeudi 15 février de 13h à 18h, GU et salle de Crossfit CAMPUS MDH. \n 18h à 20H événement fin de semaines géré par com et BVE.",
            'img' => 'img/finale2.png'
        ],
        [
            'title' => "Badminton à l'italienne",
            'description' => "Lundi 19 février de 18h à 22h, 36 équipes s'affronteront à l'italienne (3vs3) CAMPUS CR.",
            'img' => 'img/badminton2.png'
        ],
        [
            'title' => "Relais Crossfit",
            'description' => "Lundi 19 février de 18h à 22h, 6 équipes s'affronteront en équipe de 6 CAMPUS CR.",
            'img' => 'img/crossfit2.png'
        ],
        [
            'title' => "Volley en 6/6",
            'description' => "Mardi 20 février de 18h à 22h, 18 équipes s'affronteront en 6vs6 CAMPUS CR.",
            'img' => 'img/volley2.png'
        ],
        [
            'title' => "Relais marathon par équipe",
            'description' => "Mardi 20 février de 18h à 22h, 6 équipes s'affronteront de 4 à 6 HCR CAMPUS CR.",
            'img' => 'img/relais2.png'
        ],
        [
            'title' => "Tournois  e-sport",
            'description' => "Mardi 20 février de 18h à 22h, 10 équipes de 6 s'affronteront CREPS.",
            'img' => 'img/esport.png'
        ],
        [
            'title' => "Basket 3/3",
            'description' => "Mercredi 21 février de 18h à 22h, 12 équipes de 6 s'affronteront aux plateaux HCR 1/2 CAMPUS CR.",
            'img' => 'img/basket2.png'
        ],
        [
            'title' => "Escalade de Vitesse",
            'description' => "Mercredi 21 février de 18h à 22h, 6 équipes de 3 à 6 s'affronteront en relais traversées CAMPUS CR.",
            'img' => 'img/escalade2.png'
        ],
        [
            'title' => "Finales",
            'description' => "Jeudi 22 février de 13h à 18h tournoi, de 18h à 21h CEREMONIE DE CLOTURE CAMPUS CR.",
            'img' => 'img/finale2.png'
        ],
    ];
        EpreuveResult::insert($epreuve);
        
        
        
    }
    }
