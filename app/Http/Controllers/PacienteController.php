<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Http\Requests\PacienteCreateRequest;
use DB;

class PacienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $pacientes=DB::table('pacientes')
        ->select('Id', 'Nombre', 'Apellido', 'Dni', 'Email', 'NroHistorial', 'Address', 'City', 'PostalCode', 'Country', 'Nationality', 'SocialWork', 'State', 'id')
        ->where('Nombre', 'LIKE','%'.$texto.'%')
        ->orwhere('Apellido', 'LIKE','%'.$texto.'%')
        ->orderBy('Nombre', 'desc')
        ->paginate(10);

        return view('paciente.index', compact('pacientes', 'texto'));
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

        return redirect('/paciente');
    }

    public function destroy($id)
    {
        DB::table('pacientes')->delete($id);

        return redirect('/paciente');
    }

    public function show($id)
    {
        $paciente = Paciente::find($id);
        return view('paciente.edit', ['paciente'=>$paciente]);
    }

    public function update(PacienteCreateRequest $request)
    {
        $paciente = Paciente::find($request->id);
        $paciente->Nombre = $request->nombre;
        $paciente->Apellido = $request->apellido;
        $paciente->Dni = $request->dni;
        $paciente->Email = $request->email;
        $paciente->NroHistorial = $request->nroHistorial;
        $paciente->Address = $request->address;
        $paciente->City = $request->city;
        $paciente->PostalCode = $request->postalCode;
        $paciente->Country = $request->country;
        $paciente->Nationality = $request->nationality;
        $paciente->SocialWork = $request->socialWork;
        $paciente->NroAfiliado = $request->nroAfiliado;
        $paciente->State = $request->state;
        $paciente->Genero = $request->genero;
        $paciente->Pronombre = $request->pronombre;
        $paciente->NivelEducativo = $request->nivelEducativo;
        $paciente->save();
        return redirect('/paciente');
    }
}
