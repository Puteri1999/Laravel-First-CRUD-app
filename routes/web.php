<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/patient/create',[PatientController::class,'addPatient'])->name('patient.add');
Route::post('/patient/create',[PatientController::class,'savePatient'])->name('save.patient');

Route::get('/patient',[PatientController::class,'patientList'])->name('patient.list');

Route::get('/patient/update/:{id}',[PatientController::class,'updatePatient'])->name('patient.update');
Route::post('/patient/update',[PatientController::class,'donePatient'])->name('done.patient');

Route::get('/patient/delete/:{id}',[PatientController::class,'deletePatient'])->name('patient.delete');



