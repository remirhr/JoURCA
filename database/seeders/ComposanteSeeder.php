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
                'title' => 'SEN'
      
            ],
            [
                'title' => 'LSH'
            ],
            [
                'title' => 'EiSINe'
            ],
            [
                'title' => 'SESG'
            ],
            [
                'title' => 'DSP'
            ],
            [
                'title' => 'STAPS'
            ],
            [
                'title' => 'Médecine'
            ],
            
            [
                'title' => 'CdC'
            ],
            [
                'title' => 'ESIReims'
            ],
            [
                'title' => 'Odonto'
            ],
            [
                'title' => 'Pharma'
            ],
            [
                'title' => 'Institut G.Chappaz'
            ],
            [
                'title' => 'IUT RCC'
            ],
            [
                'title' => 'IUT Troyes'
            ],
            [
                'title' => 'Inspé'
            ],
            [
                'title' => 'Siège'
            ]
            ];
            Composante::insert($composante);
    }
}
