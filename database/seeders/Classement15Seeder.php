<?php

namespace Database\Seeders;

use App\Models\Classement15;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Classement15Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classement15s')->delete();
        $classement15 = [
            [
                'idEquipeC15' => '1'
             
            ], [
                'idEquipeC15' => '2'
             
            ], [
                'idEquipeC15' => '3'
             
            ]

            ];
            Classement15::insert($classement15);
    }
}
