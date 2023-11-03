<?php

namespace Database\Seeders;

use App\Models\Classement8;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Classement8Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classement8s')->delete();
        $classement8 = [
            [
                'idEquipeC8' => '1'
             
            ], [
                'idEquipeC8' => '2'
             
            ], [
                'idEquipeC8' => '3'
             
            ]

            ];
            Classement8::insert($classement8);
    }
}
