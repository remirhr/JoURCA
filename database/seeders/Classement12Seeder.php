<?php

namespace Database\Seeders;

use App\Models\Classement12;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Classement12Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classement12s')->delete();
        $classement12 = [
            [
                'idEquipeC12' => '1'
             
            ], [
                'idEquipeC12' => '2'
             
            ], [
                'idEquipeC12' => '3'
             
            ]

            ];
            Classement12::insert($classement12);
    }
}
