<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\BatimentController;
use  App\Http\Controllers\ElevesController;
use  App\Http\Controllers\FormationsController;
use  App\Http\Controllers\TypeFormationsController;
use  App\Http\Controllers\BackBatimentController;
use  App\Http\Controllers\BackElevesController;
use  App\Http\Controllers\BackFormationsController;
use  App\Http\Controllers\BackTypeFormationsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/batiment', [BatimentController::class,'index'])->name('batiment');
Route::get('/eleves',  [ElevesController::class,'index'])->name('eleves');
Route::get('/formations',  [FormationsController::class,'index'])->name('formations');
Route::get('/typeFormations',  [TypeFormationsController::class,'index'])->name('typeFormations');

//READ
Route::get('/backoffice/batiment', [BackBatimentController::class,'index'])->name('backBatiment');
Route::get('/batiments/{id}/show', [BackBatimentController::class,'show'])->name('showBatiment');

Route::get('/backoffice/eleves',  [BackElevesController::class,'index'])->name('backEleves');
Route::get('/eleves/{id}/show', [BackElevesController::class,'show'])->name('showEleve');

Route::get('/backoffice/formations',  [BackFormationsController::class,'index'])->name('backFormations');
Route::get('/formations/{id}/show', [BackFormationsController::class,'show'])->name('showFormation');

Route::get('/backoffice/typeFormations',  [BackTypeFormationsController::class,'index'])->name('backTypeFormations');
Route::get('/typeformations/{id}/show', [BackTypeFormationsController::class,'show'])->name('showTypeFormation');
