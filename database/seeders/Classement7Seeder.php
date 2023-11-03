<?php

namespace Database\Seeders;

use App\Models\Classement7;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Classement7Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classement7s')->delete();
        $classement7 = [
            [
                'idEquipeC7' => '1'
             
            ], [
                'idEquipeC7' => '2'
             
            ], [
                'idEquipeC7' => '3'
             
            ]

            ];
            Classement7::insert($classement7);
    }
}
