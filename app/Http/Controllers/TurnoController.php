<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use App\Models\Paciente;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\TurnoEmail;
use App\Mail\TurnoCancelEmail;
use Carbon\Carbon;

class TurnoController extends Controller
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

        $turnos = DB::table('turnos')
        ->where('paciente_id', '=', $paciente->id ?? null)
        ->where('IsActive', '=', 1)
        ->where('Estado', '!=', 'Cancelado')
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('turno.indexPaciente', compact('turnos'));
    }

    public function indexAdmin()
    {
        $turnos = Turno::all();

        foreach($turnos as $turno)
        {
            $paciente = DB::table('pacientes')
                ->where('id', '=', $turno->paciente_id)
                ->first();

            $turno->NombrePaciente = $paciente->Nombre;
            $turno->ApellidoPaciente = $paciente->Apellido;
            $turno->save();
        }
        $turnos = DB::table('turnos')->paginate(10);

        return view('turno.indexAdmin', compact('turnos'));
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

        $turno = new Turno();
        $turno->paciente_id = $paciente->id;
        $turno->Medico = $request->get('medico');
        $turno->NombrePaciente = $paciente->Nombre;
        $turno->ApellidoPaciente = $paciente->Apellido;
        $turno->Lugar = "CAPS1 - Colón y Salta";
        $turno->DiaHorarioPref = $request->get('dia_horario_pref');
        $turno->Estado = "Espera";
        $turno->save();

        return redirect('/turno');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function show(Turno $turno)
    {
        return view('turno.indexPaciente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function edit(Turno $turno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $turno = Turno::find($request->id);

        $dia = new Carbon($request->fecha);
        $turno->Dia = $dia->toDateString();
        $turno->Hora = $request->hora;
        $turno->Estado = "Aprobado";
        $turno->save();

        $paciente = Paciente::find($turno->paciente_id);

        Mail::to($paciente->Email)->send(new TurnoEmail($turno));

        $turnos = DB::table('turnos')->paginate(10);

        return redirect()->to('indexAdmin')->with('turnos', $turnos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turno = DB::table('turnos')
        ->where('id', '=', $id)
        ->where('IsActive', '=', 1) 
        ->first();

        $paciente = DB::table('pacientes')
        ->where('id', '=', $turno->paciente_id)
        ->first();

        Mail::to($paciente->Email)->send(new TurnoCancelEmail($turno));

        if(auth::user()->id == $paciente->user_id)
        {
            $turnos = DB::table('turnos')
            ->where('paciente_id', '=', $paciente->id)
            ->where('IsActive', '=', 1)
            ->orderBy('created_at', 'desc') 
            ->paginate(10);

            $turno = Turno::find($id);
            $turno->Dia = null;
            $turno->Hora = null;
            $turno->Estado = "Cancelado";
            $turno->save();

           return redirect()->to('/turno')->with('turnos', $turnos);
        }

        DB::table('turnos')->delete($id);

        $turnos = DB::table('turnos')->paginate(10);

        return view('turno.indexAdmin', compact('turnos'));
    }
}
