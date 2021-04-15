<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::resource('/receta', 'App\Http\Controllers\RecetaController');
Route::resource('/noticia', 'App\Http\Controllers\NoticiaController');

Route::get('/changePassword', function() {
     return view('auth.passwords.email');
});

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/dashboardAdmin', function(){
    if(auth::user()->fullacces == 'yes')
        return view('dashboardAdmin');
    return view('paciente');
});

Route::get('/homePaciente', function() {
    return view('paciente');
});

Route::get('/showPaciente','App\Http\Controllers\PacienteController@showPaciente')->middleware('verified');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
