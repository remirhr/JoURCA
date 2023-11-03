<?php

use App\Http\Controllers\Classement10Controller;
use App\Http\Controllers\Classement11Controller;
use App\Http\Controllers\Classement12Controller;
use App\Http\Controllers\Classement13Controller;
use App\Http\Controllers\Classement14Controller;
use App\Http\Controllers\Classement15Controller;
use App\Http\Controllers\Classement2Controller;
use App\Http\Controllers\Classement3Controller;
use App\Http\Controllers\Classement4Controller;
use App\Http\Controllers\Classement5Controller;
use App\Http\Controllers\Classement6Controller;
use App\Http\Controllers\Classement7Controller;
use App\Http\Controllers\Classement8Controller;
use App\Http\Controllers\Classement9Controller;
use App\Http\Controllers\ComposanteController;
use App\Http\Controllers\ParticipantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EpreuveResultController;
use App\Http\Controllers\ResultatController;
use App\Http\Controllers\Classement1Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('composantes/random', [ComposanteController::class, 'random']);
Route::resource('classement15', Classement15Controller::class);
Route::resource('classement14', Classement14Controller::class);
Route::resource('classement13', Classement13Controller::class);
Route::resource('classement12', Classement12Controller::class);
Route::resource('classement11', Classement11Controller::class);
Route::resource('classement10', Classement10Controller::class);
Route::resource('classement9', Classement9Controller::class);
Route::resource('classement8', Classement8Controller::class);
Route::resource('classement7', Classement7Controller::class);
Route::resource('classement6', Classement6Controller::class);
Route::resource('classement5', Classement5Controller::class);
Route::resource('classement4', Classement4Controller::class);
Route::resource('classement3', Classement3Controller::class);
Route::resource('classement2', Classement2Controller::class);
Route::resource('classement1', Classement1Controller::class);
Route::resource('/', EpreuveResultController::class);
Route::resource('epreuve', EpreuveResultController::class);
Route::resource('resultat', ResultatController::class);
Route::resource('participant', ParticipantController::class);
Route::resource('epreuve', EpreuveResultController::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
