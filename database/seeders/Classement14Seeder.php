<?php

namespace Database\Seeders;

use App\Models\Classement14;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Classement14Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classement14s')->delete();
        $classement14 = [
            [
                'idEquipeC14' => '1'
             
            ], [
                'idEquipeC14' => '2'
             
            ], [
                'idEquipeC14' => '3'
             
            ]

            ];
            Classement14::insert($classement14);
    }
}
