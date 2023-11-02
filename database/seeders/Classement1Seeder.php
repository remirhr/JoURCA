<?php

namespace Database\Seeders;

use App\Models\classement1;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Classement1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classement1s')->delete();
        $classement1 = [
            [
                'idEquipeC' => '1'
             
            ], [
                'idEquipeC' => '2'
             
            ], [
                'idEquipeC' => '3'
             
            ]

            ];
            classement1::insert($classement1);
    }
}
