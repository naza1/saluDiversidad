<?php

namespace App\Http\Controllers;

use App\Models\Estudio;
use App\Models\EstudioFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use PDF;
use Illuminate\Support\Facades\Storage;

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
        ->paginate(10);

        return view('estudio.SubirEstudioPaciente', compact('paciente', 'estudioFiles'));
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
        // $estudio->Estado = "Aprobado";
        // $estudio->save();

        // $estudios = Estudio::where('IsDeleted', 0)->get();

        // return redirect()->to('indexEstudioAdmin')->with('estudios', $estudios);
        return view('estudio.asignaEstudio', compact('estudio'));
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
        if(request()->estudioManual != null)
            $estudio->Estudios = implode(", ", request()->estudios).", ".request()->estudioManual;
        else
            $estudio->Estudios = implode(", ", request()->estudios);
        
        $estudio->Estado = "Asignado";
        $estudio->Medico = request()->get('medico');
        $estudio->save();
        
        $estudios = DB::table('estudios')
        ->where('IsDeleted', '=', 0)
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
        ->paginate(10);

        return redirect('/indexEstudioAdmin')->with('estudios', $estudios);
    }

    public function uploadPacienteEstudio(Request $request)
    {
        $request->validate([
            'estudioFile' => 'required|max:2048'
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
        $request->validate([
            'estudioFile' => 'required|max:2048'
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
