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

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('/paciente', 'App\Http\Controllers\PacienteController');

Route::get('/changePassword', function() {
     return view('auth.passwords.email');
});

Route::get('/homePaciente', function() {
    return view('paciente');
});

Auth::routes();

Route::get('/showPaciente/{id}','App\Http\Controllers\PacienteController@showPaciente');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
