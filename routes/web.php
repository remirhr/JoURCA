<?php

use App\Http\Controllers\Classement2Controller;
use App\Http\Controllers\Classement3Controller;
use App\Http\Controllers\Classement4Controller;
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

Route::resource('classement4', Classement4Controller::class);
Route::resource('classement3', Classement3Controller::class);
Route::resource('classement2', Classement2Controller::class);
Route::resource('classement1', Classement1Controller::class);
Route::resource('/', EpreuveResultController::class);
Route::resource('epreuve', EpreuveResultController::class);
Route::resource('resultat', ResultatController::class);
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
