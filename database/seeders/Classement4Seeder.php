<?php

namespace Database\Seeders;

use App\Models\Classement4;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Classement4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classement4s')->delete();
        $classement4 = [
            [
                'idEquipeC4' => '1'
             
            ], [
                'idEquipeC4' => '2'
             
            ], [
                'idEquipeC4' => '3'
             
            ]

            ];
            Classement4::insert($classement4);
    }
}
