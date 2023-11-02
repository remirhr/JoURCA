<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([UserSeeder::class]);
        
        $this->call([EpreuveResultSeeder::class]);
        $this->call([ComposanteSeeder::class]);
        $this->call([ParticipantSeeder::class]);
        $this->call([EquipeSeeder::class]);
        $this->call([Classement1Seeder::class]);
        $this->call([Classement2Seeder::class]);
    }
}
