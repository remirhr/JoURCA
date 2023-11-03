<?php

namespace Database\Seeders;

use App\Models\Classement9;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Classement9Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classement9s')->delete();
        $classement9 = [
            [
                'idEquipeC9' => '1'
             
            ], [
                'idEquipeC9' => '2'
             
            ], [
                'idEquipeC9' => '3'
             
            ]

            ];
            Classement9::insert($classement9);
    }
}
