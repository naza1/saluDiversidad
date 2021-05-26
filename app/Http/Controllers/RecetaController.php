<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use App\Models\Medicamento;
use App\Models\Medicamento_Receta;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use DateTime;
use Carbon\Carbon;

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

        $recetasMedicamentos = DB::table('recetas')
        ->join('medicamento__recetas', 'recetas.id', '=', 'medicamento__recetas.receta_id')
        ->join('medicamentos', 'medicamento__recetas.medicamento_id', '=', 'medicamentos.id')
        ->where('IsDeleted', '=', 0)
        ->where('paciente_id', '=', $paciente->id)
        ->get();

        return view('receta.indexPaciente', compact('recetas', 'recetasMedicamentos'));
    }

    public function indexRecetaAdmin(Request $request)
    {
        $texto = trim($request->get('texto'));
        $pacientes = DB::table('pacientes')
        ->select('id')
        ->where('Nombre', 'LIKE','%'.$texto.'%')
        ->orwhere('Apellido', 'LIKE','%'.$texto.'%')
        ->orwhere('Dni', 'LIKE','%'.$texto.'%')
        ->orderBy('created_at', 'desc');

        if($texto != null)
        {
            $recetas = DB::table('recetas')
            ->where('IsDeleted', '=', 0)
            ->whereIn('paciente_id', $pacientes)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        }
        else
        {
            $recetas = DB::table('recetas')
            ->where('IsDeleted', '=', 0)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        }

        $recetasMedicamentos = DB::table('recetas')
        ->join('medicamento__recetas', 'recetas.id', '=', 'medicamento__recetas.receta_id')
        ->join('medicamentos', 'medicamento__recetas.medicamento_id', '=', 'medicamentos.id')
        ->where('IsDeleted', '=', 0)
        ->get();

        return view('receta.indexAdmin', compact('recetas', 'texto', 'recetasMedicamentos'));
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

        return redirect()->to('receta')->with('recetas', $recetas);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recetas = DB::table('recetas')
        ->where('IsDeleted', '=', 0)
        ->paginate(10);

        $receta = DB::table('recetas')
        ->where('id', '=', $id)->first();

        $paciente = DB::table('pacientes')
        ->where('id', '=', $receta->paciente_id)->first();

        $date = new DateTime($paciente->FechaInicioHormonizacion);
        $date2 = new DateTime("now");
        $diff = $date2->diff($date);
        $diff2 = $diff->format('%y años %m meses %d días');

        $medicamentoChecks = DB::table('medicamento__recetas')
        ->join('recetas', 'recetas.id', '=', 'medicamento__recetas.receta_id')
        ->where('paciente_id', '=', $paciente->id)
        ->orderBy('receta_id', 'desc')
        ->get();

        $receta =DB::table('recetas')
        ->where('paciente_id', '=', $paciente->id)
        ->orderBy('id', 'desc')
        ->first();

        $medicamentos = Medicamento::all();
        return view('receta.recetarDuplicadoAdmin', compact('receta', 'medicamentos', 'medicamentoChecks', 'id', 'paciente', 'diff2'));
    }

    // public function showDuplicadoAdmin($id)
    // {
    //     $receta = DB::table('recetas')
    //     ->where('IsDeleted', '=', 0)
    //     ->where('id', '=', $id)
    //     ->first();

    //     $paciente = DB::table('pacientes')
    //     ->where('id', '=', $receta->paciente_id)
    //     ->first();

    //     // $recetaNew = new Receta();
    //     // $recetaNew->paciente_id = $receta->paciente_id;
    //     // $recetaNew->NombrePaciente = $paciente->Nombre;
    //     // $recetaNew->ApellidoPaciente = $paciente->Apellido;
    //     // $recetaNew->Dni = $paciente->Dni;
    //     // $recetaNew->Estado = "Espera";
    //     // $recetaNew->save();

    //     // $newId = $recetaNew->id;

    //     $medicamentoChecks = DB::table('medicamento__recetas')
    //     ->where('receta_id', '=', $receta->id)->get();

    //     $date = new DateTime($paciente->FechaInicioHormonizacion);
    //     $date2 = new DateTime("now");
    //     $diff = $date2->diff($date);
    //     $diff2 = $diff->format('%y años %m meses %d días');

    //     $medicamentos = Medicamento::all();
    //     return view('receta.recetarDuplicadoAdmin', compact('receta', 'medicamentos', 'id', 'medicamentoChecks', 'newId', 'paciente', 'diff2'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd("");
        $recetaOld = DB::table('recetas')
        ->where('id', '=', $id)->first();

        $paciente = DB::table('pacientes')
        ->where('id', '=', $recetaOld->paciente_id)
        ->first();

        $receta = new Receta();
        $receta->paciente_id = $paciente->id;
        $receta->NombrePaciente = $paciente->Nombre;
        $receta->ApellidoPaciente = $paciente->Apellido;
        $receta->Dni = $paciente->Dni;
        $receta->Estado = "Aprobado";
        $receta->Medico = $recetaOld->Medico;
        $receta->Adicional = $recetaOld->Adicional;
        $receta->save();

        $medicamentos = DB::table('medicamento__recetas')
        ->where('receta_id', '=', $id)->get();

        foreach($medicamentos as $medicamento)
        {
            $medicamentoxReceta = new Medicamento_Receta();
            $medicamentoxReceta->receta_id = $receta->id;
            $medicamentoxReceta->medicamento_id = $medicamento->medicamento_id;
            $medicamentoxReceta->frecuencia = $medicamento->frecuencia;
            $medicamentoxReceta->cantidad = $medicamento->cantidad;
            $medicamentoxReceta->comentario = $medicamento->comentario;
            $medicamentoxReceta->paciente_id = $paciente->id;
            $medicamentoxReceta->save();
        }

        $recetas = DB::table('recetas')
        ->where('IsDeleted', '=', 0)
        ->paginate(10);

        $medicamentosxRecetas = DB::table('medicamento__recetas')
        ->whereIn('receta_id', $recetas);

        $recetasMedicamentos = DB::table('recetas')
        ->join('medicamento__recetas', 'recetas.id', '=', 'medicamento__recetas.receta_id')
        ->join('medicamentos', 'medicamento__recetas.medicamento_id', '=', 'medicamentos.id')
        ->where('IsDeleted', '=', 0)
        ->get();

        return redirect()->to('indexRecetaAdmin')
        ->with('recetas', $recetas)
        ->with('recetasMedicamentos', $recetasMedicamentos);
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
        if(request()->drogas != null)
        {
            foreach(request()->drogas as $droga)
            {
                $medicamentos_receta = DB::table('medicamento_recetas')
                ->where('receta-id', '=', request()->get('id'));

                $medicamentoxReceta = new Medicamento_Receta();
                $medicamentoxReceta->receta_id = request()->get('id');
    
                $medicamento = db::table('medicamentos')
                ->where('nombre', '=', $droga)->first();
    
                $medicamentoxReceta->medicamento_id = $medicamento->id;
                $medicamentoxReceta->frecuencia = $request->get("frec_".$medicamento->id);
                $medicamentoxReceta->cantidad = request()->get("cant_".$medicamento->id);
                $medicamentoxReceta->comentario = request()->get("com_".$medicamento->id);
                $medicamentoxReceta->save();
            }

            $receta = Receta::find(request()->get('id'));
            $receta->Estado = "Aprobado";
            $receta->Medico = request()->get('medico');
            $receta->Adicional = request()->get('adicional');
            $receta->save();
        }

        $recetas = DB::table('recetas')
        ->where('IsDeleted', '=', 0)
        ->paginate(10);

        $medicamentosxRecetas = DB::table('medicamento__recetas')
        ->whereIn('receta_id', $recetas);

        $recetasMedicamentos = DB::table('recetas')
        ->join('medicamento__recetas', 'recetas.id', '=', 'medicamento__recetas.receta_id')
        ->join('medicamentos', 'medicamento__recetas.medicamento_id', '=', 'medicamentos.id')
        ->where('IsDeleted', '=', 0)
        ->get();

        return redirect()->to('indexRecetaAdmin')
        ->with('recetas', $recetas)
        ->with('recetasMedicamentos', $recetasMedicamentos);
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
