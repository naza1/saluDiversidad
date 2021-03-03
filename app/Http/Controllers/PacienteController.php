<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Http\Requests\PacienteCreateRequest;
use DB;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes['pacientes'] = Paciente::paginate(3);

        return view('paciente.index', $pacientes);
    }

    public function create()
    {
        return view('paciente.create');
    }

    public function store(PacienteCreateRequest $request)
    {
        $paciente = new Paciente;
        $paciente->nombre = $request->get('nombre');
        $paciente->apellido = $request->get('apellido');
        $paciente->dni = $request->get('dni');
        $paciente->email = $request->get('email');
        $paciente->nroHistorial = $request->get('nroHistorial');
        $paciente->address = $request->get('address');
        $paciente->city = $request->get('city');
        $paciente->postalCode = $request->get('postalCode');
        $paciente->country = $request->get('country');
        $paciente->nationality = $request->get('nationality');
        $paciente->socialWork = $request->get('socialWork');
        $paciente->nroAfiliado = $request->get('nroAfiliado');
        $paciente->state = $request->get('state');
        $paciente->genero = $request->get('genero');
        $paciente->pronombre = $request->get('pronombre');
        $paciente->nivelEducativo = $request->get('nivelEducativo');
        $paciente->isActive = $request->get('isActive');
        $paciente->save();
        return redirect('/paciente/create')->with('message','Guardado Satisfactoriamente !');
    }
}
