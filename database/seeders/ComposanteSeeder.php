<?php

namespace Database\Seeders;

use App\Models\Composante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComposanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('composantes')->delete();
        $composante = [
            [
                'title' => 'SEN',
                'img'=>'img/science.png'
            ],
            [
                'title' => 'LSH',
                'img'=>'img/lsh.png'
            ],
            [
                'title' => 'EiSINe',
                'img'=>'img/eisine'
            ],
            [
                'title' => 'SESG',
                'img'=>'img/sesg.jpeg'
            ],
            [
                'title' => 'DSP',
                'img'=>'img/dsp.png'
            ],
            [
                'title' => 'STAPS',
                'img'=>'img/staps.png'
            ],
            [
                'title' => 'Médecine',
                'img'=>'img/medecine.png'
            ],
            
            [
                'title' => 'CdC',
                'img'=>'img/cdc.png'
            ],
            [
                'title' => 'ESIReims',
                'img'=>'img/esireims.png'
            ],
            [
                'title' => 'Odonto',
                'img'=>'img/cdc.png'
            ],
            [
                'title' => 'Pharma',
                'img'=>'img/pharma.jpeg'
            ],
            [
                'title' => 'Institut G.Chappaz',
                'img'=>'img/institut.png'
            ],
            [
                'title' => 'IUT RCC',
                'img'=>'img/iutrcc.png'
            ],
            [
                'title' => 'IUT Troyes',
                'img'=>'img/iuttroyes.png'
            ],
            [
                'title' => 'Inspé',
                'img'=>'img/inspe.png'
            ],
            [
                'title' => 'Siège',
                'img'=>'img/cdc.png'
            ],
            [
                'title' => 'Default',
                'img'=>'img/default.png'
            ]
            ];
            Composante::insert($composante);
    }
}
