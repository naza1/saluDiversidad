<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use App\Models\Noticia;
use App\Http\Controllers\PdfController;

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
Route::resource('/turno', 'App\Http\Controllers\TurnoController');
Route::resource('/estudio', 'App\Http\Controllers\EstudioController');

Route::get('/changePassword', function() {
     return view('auth.passwords.email');
});

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/dashboardAdmin', function() {

    if(auth::user()->fullacces == 'yes')
    {
        $noticias = DB::table('noticias')->paginate(10);
        return view('dashboardAdmin', compact('noticias'));
    }
        
    return view('paciente');
});

Route::get('/homePaciente', function() {
    
    if(auth::user()->email_verified_at != null){
        $noticias = DB::table('noticias')->paginate(10);
        return view('paciente', compact('noticias'));
    }
   
    return view('auth.verify');
});

Route::get('/showPaciente','App\Http\Controllers\PacienteController@showPaciente')->middleware('verified');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/storage-link', function(){
    Artisan::call('storage:link');
});

Route::get('/indexAdmin','App\Http\Controllers\TurnoController@indexAdmin')->middleware('verified');

Route::get('generate-pdf', [PdfController::class, 'generatePDF']);
Route::get('generate-orden', [PdfController::class, 'generateOrden']);

Route::get('/indexEstudioAdmin','App\Http\Controllers\EstudioController@indexEstudioAdmin')->middleware('verified');