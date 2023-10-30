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
                $epreuve = [
                    [
              'title' => 'Handball 6/6',
              'description' => "Lundi 12 février de 18h à 22h, 8 équipes de 6 s'affronteront dans le GU (plateau C) CAMPUS MDH. Pas de tribunes disponibles",
              'img' => 'public/img/handball.png'
        ],
        [
              'title' => 'Sumo',
              'description' => "Lundi 12 février de 18h à 22h, 6 équipes de 6 s'affronteront en salle de crossfit CAMPUS MDH.",
              'img' => 'public/img/sumo.png'
        ],
        [
            'title' => 'Touch Rugby 4/4',
              'description' => "Mardi 13 février de 18h à 22h, 8 équipes de 4 s'affronteront CAMPUS MDH.",
              'img' => 'public/img/touchrubgy.png'
        ],
        [
            'title' => 'Laser Run',
              'description' => "Mardi 13 février de 18h à 22h, 6 équipes de 6 s'affronteront en extérieur ou salle principale 3 à 6 CAMPUS MDH.",
              'img' => 'public/img/laserrun.png'
        ],
        [
            'title' => 'Futsal',
              'description' => "Mercredi 14 février de 18h à 22h, 8 équipes de 5 s'affronteront CAMPUS MDH.",
              'img' => 'public/img/futsal.png'
        ],
        [
            'title' => 'Palets bretons',
            'description' => "Mercredi 14 février de 18h à 22h, 6 équipes s'affronteront en extérieur ou salle principale 3 à 6 CAMPUS MDH.",
            'img' => 'public/img/paletsbretons.png'
        ],
        [
            'title' => 'Finales',
            'description' => "Jeudi 15 février de 13h à 18h, GU et salle de Crossfit CAMPUS MDH. \n 18h à 20H événement fin de semaines géré par com et BVE.",
            'img' => 'public/img/finale.png'
        ],
        [
            'title' => "Badminton à l'italienne",
            'description' => "Lundi 19 février de 18h à 22h, 36 équipes s'affronteront à l'italienne (3vs3) CAMPUS CR.",
            'img' => 'public/img/badminton.png'
        ],
        [
            'title' => "Relais Crossfit",
            'description' => "Lundi 19 février de 18h à 22h, 6 équipes s'affronteront en équipe de 6 CAMPUS CR.",
            'img' => 'public/img/badminton.png'
        ],
        [
            'title' => "Volley en 6/6",
            'description' => "Mardi 20 février de 18h à 22h, 18 équipes s'affronteront en 6vs6 CAMPUS CR.",
            'img' => 'public/img/volley.png'
        ],
        [
            'title' => "Relais marathon par équipe",
            'description' => "Mardi 20 février de 18h à 22h, 6 équipes s'affronteront de 4 à 6 HCR CAMPUS CR.",
            'img' => 'public/img/relais.png'
        ],
        [
            'title' => "Tournois  e-sport",
            'description' => "Mardi 20 février de 18h à 22h, 10 équipes de 6 s'affronteront CREPS.",
            'img' => 'public/img/esport.png'
        ],
        [
            'title' => "Basket 3/3",
            'description' => "Mercredi 21 février de 18h à 22h, 12 équipes de 6 s'affronteront aux plateaux HCR 1/2 CAMPUS CR.",
            'img' => 'public/img/basket.png'
        ],
        [
            'title' => "Escalade de Vitesse",
            'description' => "Mercredi 21 février de 18h à 22h, 6 équipes de 3 à 6 s'affronteront en relais traversées CAMPUS CR.",
            'img' => 'public/img/escalade.png'
        ],
        [
            'title' => "Finales",
            'description' => "Jeudi 22 février de 13h à 18h tournoi, de 18h à 21h CEREMONIE DE CLOTURE CAMPUS CR.",
            'img' => 'public/img/finale.png'
        ],
    ];
        EpreuveResult::insert($epreuve);
        
        
        
    }
    }
