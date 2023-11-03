<?php

namespace Database\Seeders;

use App\Models\Classement5;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Classement5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classement5s')->delete();
        $classement5 = [
            [
                'idEquipeC5' => '1'
             
            ], [
                'idEquipeC5' => '2'
             
            ], [
                'idEquipeC5' => '3'
             
            ]

            ];
            Classement5::insert($classement5);
    }
}
