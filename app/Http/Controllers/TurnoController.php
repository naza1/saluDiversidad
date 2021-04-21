<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use App\Models\Paciente;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\TurnoEmail;

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
        ->where('UserId', '=', auth::user()->id)
        ->first();

        $turnos = DB::table('turnos')
        ->where('PacienteId', '=', $paciente->id ?? null)
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
            ->where('id', '=', $turno->PacienteId)
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
        ->where('UserId', '=', auth::user()->id)
        ->first();

        $turno = new Turno();
        $turno->PacienteId = $paciente->id;
        $turno->Medico = $request->get('medico');
        $turno->NombrePaciente = $paciente->Nombre;
        $turno->ApellidoPaciente = $paciente->Apellido;
        $turno->Lugar = "CAPS1 - Colón y Salta";
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

        $turno->Dia = $request->fecha;
        $turno->Hora = $request->hora;
        $turno->save();

        $paciente = Paciente::find($turno->PacienteId);

        Mail::to($paciente->Email)->send(new TurnoEmail($turno));

        $turnos = DB::table('turnos')->paginate(10);

        return view('turno.indexAdmin', compact('turnos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('turnos')->delete($id);

        $turnos = DB::table('turnos')->paginate(10);

        return view('turno.indexAdmin', compact('turnos'));
    }
}
