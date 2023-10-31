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
                'NomEquipe' => 'ThaBeast',
                'Slogan' =>  'Here for the win',
                'pdp' => 'img/equipe/hacker.png',
                'idParticipant1' => '1',
                'idParticipant2' => '1',
                'idParticipant3' => '1',
                'idParticipant4' => '1',
                'idParticipant5' => '1',
                'idParticipant6' => '1'
            ]
            ];
            Equipe::insert($equipe);
    }
}
