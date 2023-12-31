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
        $this->call([Classement3Seeder::class]);
        $this->call([Classement4Seeder::class]);
        $this->call([Classement5Seeder::class]);
        $this->call([Classement6Seeder::class]);
        $this->call([Classement7Seeder::class]);
        $this->call([Classement8Seeder::class]);
        $this->call([Classement9Seeder::class]);
        $this->call([Classement10Seeder::class]);
        $this->call([Classement11Seeder::class]);
        $this->call([Classement12Seeder::class]);
        $this->call([Classement13Seeder::class]);
        $this->call([Classement14Seeder::class]);
        $this->call([Classement15Seeder::class]);
    }
}
