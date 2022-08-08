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
    Route::get('/cardiac-History', [\App\Http\Controllers\Controller::class, 'cardiacHistory'])->name('cardiac-History');
    Route::get('/cath-echo-data', [\App\Http\Controllers\Controller::class, 'cathEchoData'])->name('cath-echo-data');
    Route::get('/patient-daily-lab-value', [\App\Http\Controllers\Controller::class, 'patientDailyLabValue'])->name('patient-daily-lab-value');
});

Route::group(['prefix' => 'anesthesia'] , function() {
    Route::get('/', [\App\Http\Controllers\Controller::class, 'preOpAnesthesia'])->name('pre-op-anesthesia');
    

});

Route::group(['prefix' => 'PhysicalTherapy'] , function() {
    Route::get('/', [\App\Http\Controllers\Controller::class, 'physioPreOpAssesment'])->name('physio-pre-op-assesment');
    Route::get('/cardio-pulmonary-physical-therapy', [\App\Http\Controllers\Controller::class, 'cardioPulmoTherapy'])->name('cardio-pulmonary-physical-therapy');

});

Route::group(['prefix' => 'operation'] , function() {
    Route::get('/remarks', [\App\Http\Controllers\Controller::class, 'operationRemarks'])->name('operation-remarks');
    Route::get('/outcome', [\App\Http\Controllers\Controller::class, 'operationOutcome'])->name('operation-outcome');
    Route::get('/info', [\App\Http\Controllers\Controller::class, 'operationInfo'])->name('operation-info');
    Route::get('/discharge', [\App\Http\Controllers\Controller::class, 'dischargeSummary'])->name('discharge-summary');
    Route::get('/pre-op-check', [\App\Http\Controllers\Controller::class, 'PreOpCheck'])->name('pre-op-check');

});
