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
Route::resource('/consulta', 'App\Http\Controllers\ConsultaController');

Route::get('/changePassword', function() {
     return view('auth.passwords.email');
});

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/dashboardAdmin', function() {

    if(auth::user()->fullacces == 'yes')
    {
        $amountTurnos = DB::table('turnos')
        ->where('IsActive', '=', 1)
        ->whereNull("Dia")
        ->get()->count();

        $amountRecetas = DB::table('recetas')
        ->where('IsDeleted', '=', 0)
        ->where('Estado', '=', 'Espera')
        ->get()->count();

        $amountEstudios = DB::table('estudios')
        ->where('IsDeleted', '=', 0)
        ->where('Estado', '=', 'Espera')
        ->get()->count();

        $noticias = DB::table('noticias')->paginate(10);
        return view('dashboardAdmin', compact('noticias', 'amountTurnos', 'amountRecetas', 'amountEstudios'));
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
Route::get('generate-receta', [PdfController::class, 'generateReceta']);

Route::get('/indexEstudioAdmin','App\Http\Controllers\EstudioController@indexEstudioAdmin')->middleware('verified');
Route::get('/indexRecetaAdmin','App\Http\Controllers\RecetaController@indexRecetaAdmin')->middleware('verified');

Route::get('/showHistorial/{id}','App\Http\Controllers\PacienteController@showHistorial')->middleware('verified');

Route::post('/estudio/uploadAdminEstudio','App\Http\Controllers\EstudioController@uploadAdminEstudio')->middleware('verified');
Route::post('/estudio/uploadPacienteEstudio','App\Http\Controllers\EstudioController@uploadPacienteEstudio')->middleware('verified');

Route::post('/saveHormonizacion','App\Http\Controllers\PacienteController@saveHormonizacion')->middleware('verified');

Route::get('/subirEstudioPaciente','App\Http\Controllers\EstudioController@subirEstudioPaciente')->middleware('verified');

Route::get('/showDuplicado/{id}', 'App\Http\Controllers\RecetaController@showDuplicadoAdmin')->middleware('verified');