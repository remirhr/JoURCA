<?php

namespace Database\Seeders;

use App\Models\Classement3;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Classement3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classement3s')->delete();
        $classement3 = [
            [
                'idEquipeC3' => '1'
             
            ], [
                'idEquipeC3' => '2'
             
            ], [
                'idEquipeC3' => '3'
             
            ]

            ];
            Classement3::insert($classement3);
    }
}
