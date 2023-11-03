<?php

namespace Database\Seeders;

use App\Models\Classement6;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Classement6Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classement6s')->delete();
        $classement6 = [
            [
                'idEquipeC6' => '1'
             
            ], [
                'idEquipeC6' => '2'
             
            ], [
                'idEquipeC6' => '3'
             
            ]

            ];
            Classement6::insert($classement6);
    }
}
