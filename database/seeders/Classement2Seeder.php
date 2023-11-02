<?php

namespace Database\Seeders;

use App\Models\Classement2;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Classement2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classement2s')->delete();
        $classement2 = [
            [
                'idEquipeC2' => '1'
             
            ], [
                'idEquipeC2' => '2'
             
            ], [
                'idEquipeC2' => '3'
             
            ]

            ];
            Classement2::insert($classement2);
    }
}
