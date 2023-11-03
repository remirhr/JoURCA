<?php

namespace Database\Seeders;

use App\Models\Classement10;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Classement10Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classement10s')->delete();
        $classement10 = [
            [
                'idEquipeC10' => '1'
             
            ], [
                'idEquipeC10' => '2'
             
            ], [
                'idEquipeC10' => '3'
             
            ]

            ];
            Classement10::insert($classement10);
    }
}
