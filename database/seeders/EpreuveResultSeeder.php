<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\EpreuveResult;

class EpreuveResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('epreuve_results')->truncate();
        EpreuveResult::create([
              'title' => 'Handball',
              'description' => "Epreuve qui a lieu le XX/XX à XXhXX",
              'img' => 'public/img/handball'
          ]);
    }
}
