<?php

namespace App\Http\Controllers;

use App\Models\Composante;
use Illuminate\Http\Request;

class ComposanteController extends Controller
{
    public function random() {
        return Composante::inRandomOrder()->get();

        /*->with(['composantes'])->first();*/
    }  
}
