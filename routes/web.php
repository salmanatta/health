<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/oracle', function(){
    $v = \Illuminate\Support\Facades\DB::raw(\Illuminate\Support\Facades\DB::select("select * from security.users where MRNO like '%0000085'"));
    print_r($v);

});
Route::get('/test-sql', [\App\Http\Controllers\Controller::class,'testSQL']);
Route::get('/test-oracle', [\App\Http\Controllers\Controller::class,'testOracle']);
Route::get('/', [\App\Http\Controllers\Controller::class,'index']);
Route::get('/home', [\App\Http\Controllers\Controller::class,'home']);
Route::get('/calender' , [\App\Http\Controllers\Controller::class,'showCalender'])->name('calender');

Route::group(['prefix' => 'patient-360'] , function() {
    Route::get('/', [\App\Http\Controllers\Controller::class, 'patientsList'])->name('patients');
    Route::get('/patient', [\App\Http\Controllers\Controller::class, 'newPatient'])->name('new-patient');
});

