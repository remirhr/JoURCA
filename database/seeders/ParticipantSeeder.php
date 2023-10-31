<?php

namespace Database\Seeders;

use App\Models\Participant;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    /*
     $table->string('NomP', 100);
            $table->string('PrenomP', 100);
            $table->dateTime('DateDeNaissance');
            $table->integer('NumeroEtudiant');
            $table->binary('pdp');*/
    public function run(): void
    {
        DB::table('participants')->delete();
        $participant = [
            [
                'idParticipant' => '22200942',
                'NomP' => 'Rahir',
                'PrenomP' =>  'Rémi',
                'DateDeNaissance'=> '2004-09-22',
                'NumeroEtudiant'=> '22200942',
                'pdp' => 'img/participant/remirahir.png',
                'idComposante' => '1'
            ]
            ];
            Participant::insert($participant);
    }
}
