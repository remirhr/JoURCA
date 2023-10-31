<?php

namespace Database\Seeders;

use App\Models\Equipe;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     */
    /*  $table->id('idEquipe');
            $table->string('NomEquipe', 100);
            $table->string('Slogan', 100);
           $table->integer('idMembre1');
         $table->integer('idMembre2');
        $table->integer('idMembre3');
        $table->integer('idMembre4');
                $table->integer('idMembre5');
        $table->integer('idMembre6');
            $table->binary('pdp');
            $table->integer('idComposante');*/
    public function run(): void
    {
        DB::table('equipes')->delete();
        $equipe = [
            [
                'NomEquipe' => 'ThaBeast1',
                'Slogan' =>  'Here for ',
         
                'idParticipant1' => '22200942',
                'idParticipant2' => '22200942',
                'idParticipant3' => '22200942',
                'idParticipant4' => '22200942',
                'idParticipant5' => '22200942',
                'idParticipant6' => '22200942',
                'idComposante' => '1'
            ],
            [
                'NomEquipe' => 'ThaBeast2',
                'Slogan' =>  'Here for the win',
            
                'idParticipant1' => '22200942',
                'idParticipant2' => '22200942',
                'idParticipant3' => '22200942',
                'idParticipant4' => '22200942',
                'idParticipant5' => '22200942',
                'idParticipant6' => '22200942',
                'idComposante' => '1'
            ],[
                'NomEquipe' => 'ThaBeast3',
                'Slogan' =>  'Here ',
               
                'idParticipant1' => '22200942',
                'idParticipant2' => '22200942',
                'idParticipant3' => '22200942',
                'idParticipant4' => '22200942',
                'idParticipant5' => '22200942',
                'idParticipant6' => '22200942',
                'idComposante' => '1'
            ]
            ];
            Equipe::insert($equipe);
    }
}
