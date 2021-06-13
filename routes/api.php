<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/patient/create',[PatientController::class,'savePatient'])->name('save.patient');
Route::get('/patient',[PatientController::class,'patientList'])->name('patient.list');
Route::post('/patient/update',[PatientController::class,'donePatient'])->name('done.patient');
Route::get('/patient/delete/:{id}',[PatientController::class,'deletePatient'])->name('patient.delete');
