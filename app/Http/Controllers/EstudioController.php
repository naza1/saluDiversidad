<?php

namespace App\Http\Controllers;

use App\Models\Estudio;
use App\Models\EstudioFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use PDF;
use Illuminate\Support\Facades\Storage;
use DateTime;
use Carbon\Carbon;

class EstudioController extends Controller
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

        $estudios = DB::table('estudios')
            ->where('paciente_id', '=', $paciente->id)
            ->where('IsDeleted', '=', 0)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('estudio.indexPaciente', compact('estudios', 'paciente'));
    }

    public function subirEstudioPaciente()
    {
        $paciente = DB::table('pacientes')
            ->where('user_id', '=', auth::user()->id)
            ->first();

        $estudioFiles = DB::table('estudio_files')
        ->where('paciente_id', '=', $paciente->id)
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('estudio.subirEstudioPaciente', compact('paciente', 'estudioFiles'));
    }

    public function indexEstudioAdmin()
    {
        $estudios = Estudio::where('IsDeleted', 0)->get();

        foreach($estudios as $estudio)
        {
            $paciente = DB::table('pacientes')
                ->where('id', '=', $estudio->paciente_id)
                ->first();

            $estudio->NombrePaciente = $paciente->Nombre;
            $estudio->ApellidoPaciente = $paciente->Apellido;
            $estudio->save();
        }
        
        $estudios = DB::table('estudios')
        ->where('IsDeleted', '=', 0)
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('estudio.indexAdmin', compact('estudios'));
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
        \Log::info('Guardando estudio para el user:'.auth::user()->id);

        $paciente = DB::table('pacientes')
        ->where('user_id', '=', auth::user()->id)
        ->first();

        $estudio = new Estudio();
        $estudio->paciente_id = $paciente->id;
        $estudio->NombrePaciente = $paciente->Nombre;
        $estudio->ApellidoPaciente = $paciente->Apellido;
        $estudio->Dni = $paciente->Dni;
        $estudio->Estado = "Espera";
        $estudio->save();
        
        $estudios = DB::table('estudios')
        ->where('paciente_id', '=', $paciente->id)
        ->where('IsDeleted', '=', 0)
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return redirect('/estudio')->with('estudios', $estudios)->with('paciente', $paciente);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $estudio = Estudio::find($id);
         
         $paciente = DB::table('pacientes')
         ->where('id', '=', $estudio->paciente_id)->first();

        $date = new DateTime($paciente->FechaInicioHormonizacion);
        $date2 = new DateTime("now");
        $diff = $date2->diff($date);
        $diff2 = $diff->format('%y años %m meses %d días');

        return view('estudio.asignaEstudio', compact('estudio', 'paciente', 'diff2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudio $estudio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudio $estudio)
    {
        \Log::info('Actualizando estudio para el estudio:'.$estudio->id);

        if(request()->estudioManual != null)
            $estudio->Estudios = implode(", ", request()->estudios).", ".request()->estudioManual;
        else
            $estudio->Estudios = implode(", ", request()->estudios);
        
        $estudio->Estado = "Asignado";
        $estudio->Medico = request()->get('medico');
        $estudio->save();
        
        $estudios = DB::table('estudios')
        ->where('IsDeleted', '=', 0)
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('estudio.indexAdmin', compact('estudios'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudio = Estudio::find($id);
        $estudio->IsDeleted = 1;
        $estudio->save();

        $estudios = DB::table('estudios')
        ->where('IsDeleted', '=', 0)
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return redirect('/indexEstudioAdmin')->with('estudios', $estudios);
    }

    public function uploadPacienteEstudio(Request $request)
    {
        \Log::info('Subiendo estudio para el user:'.$request->id);

        $request->validate([
            'estudioFile' => 'required|max:5000'
        ]);

        $paciente = DB::table('pacientes')
        ->where('id', '=', request()->get('id'))
        ->first();

        if($request->estudioFile != null)
        {
            $estudio = $request->file('estudioFile')->store('public/estudios/'. $request->id);
            $filename = $request->file('estudioFile')->getClientOriginalName(); 
            $url = Storage::url($estudio);

            $estudioFile = new EstudioFile();
            $estudioFile->paciente_id = $paciente->id;
            $estudioFile->path = $url;
            $estudioFile->name = $filename;
            $estudioFile->save();
        }
        
        return redirect('subirEstudioPaciente');
    }

    public function uploadAdminEstudio(Request $request)
    {
        \Log::info('Subiendo estudio desde el admin para el user:'.$request->id);

        $request->validate([
            'estudioFile' => 'required|max:5000'
        ]);

        $estudios = DB::table('estudios')
        ->where('IsDeleted', '=', 0)
        ->paginate(10);

        $paciente = DB::table('pacientes')
        ->where('id', '=', request()->get('id'))
        ->first();

        if($request->estudioFile != null)
        {
            $estudio = $request->file('estudioFile')->store('public/estudios/'. $request->id);
            $filename = $request->file('estudioFile')->getClientOriginalName(); 
            $url = Storage::url($estudio);

            $estudioFile = new EstudioFile();
            $estudioFile->paciente_id = $paciente->id;
            $estudioFile->path = $url;
            $estudioFile->name = $filename;
            $estudioFile->save();
        }

        return redirect()->to('showHistorial/'.$paciente->id)->with('paciente', $request->id);
    }
}
