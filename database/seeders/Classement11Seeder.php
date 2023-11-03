<?php

namespace Database\Seeders;

use App\Models\Classement11;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Classement11Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classement11s')->delete();
        $classement11 = [
            [
                'idEquipeC11' => '1'
             
            ], [
                'idEquipeC11' => '2'
             
            ], [
                'idEquipeC11' => '3'
             
            ]

            ];
            Classement11::insert($classement11);
    }
}
