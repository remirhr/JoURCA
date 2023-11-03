<?php

namespace Database\Seeders;

use App\Models\Classement13;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Classement13Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classement13s')->delete();
        $classement13 = [
            [
                'idEquipeC13' => '1'
             
            ], [
                'idEquipeC13' => '2'
             
            ], [
                'idEquipeC13' => '3'
             
            ]

            ];
            Classement13::insert($classement13);
    }
}
