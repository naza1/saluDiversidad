<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente = DB::table('pacientes')
        ->where('user_id', '=', auth::user()->id)
        ->first();
        
        $recetas = DB::table('recetas')
        ->where('paciente_id', '=', $paciente->id)
        ->where('IsDeleted', '=', 0)
        ->paginate(10);

        return view('receta.indexPaciente', compact('recetas'));
    }

    public function indexRecetaAdmin()
    {
        $recetas = DB::table('recetas')
        ->where('IsDeleted', '=', 0)
        ->paginate(10);

        //return view('receta.RecetarAdmin', compact('recetas'));
        return view('receta.indexAdmin', compact('recetas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = DB::table('pacientes')
        ->where('user_id', '=', auth::user()->id)
        ->first();
        
        $receta = new Receta();
        $receta->paciente_id = $paciente->id;
        $receta->NombrePaciente = $paciente->Nombre;
        $receta->ApellidoPaciente = $paciente->Apellido;
        $receta->Dni = $paciente->Dni;
        $receta->Estado = "Espera";
        
        if(request()->recetas != null)
            $receta->Recetas = implode(", ", request()->recetas);
        
        $receta->save();
        
        $recetas = DB::table('recetas')
        ->where('paciente_id', '=', $paciente->id)
        ->where('IsDeleted', '=', 0)
        ->paginate(10);

        return view('receta.indexPaciente', compact('recetas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd("");
        // $receta = Receta::find($id);
        // $receta->Estado = "Aprobado";
        // $receta->save();

        $recetas = DB::table('recetas')
        ->where('IsDeleted', '=', 0)
        ->paginate(10);

        //return redirect()->to('indexRecetaAdmin')->with('recetas', $recetas);
        return view('receta.RecetarAdmin', compact('recetas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit(Receta $receta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receta $receta)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $receta = Receta::find($id);
        $receta->IsDeleted = 1;
        $receta->save();

        $recetas = DB::table('recetas')
        ->where('IsDeleted', '=', 0)
        ->paginate(10);

        return redirect()->to('indexRecetaAdmin')->with('recetas', $recetas);
    }
}
