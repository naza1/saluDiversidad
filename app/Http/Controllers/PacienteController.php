<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Genero;
use App\Models\User;
use App\Models\Pronombre;
use App\Models\Educacion;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\PacienteCreateRequest;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PacienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('RoleViews');
    }

    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $pacientes = DB::table('pacientes')
        ->where('Nombre', 'LIKE','%'.$texto.'%')
        ->orwhere('Apellido', 'LIKE','%'.$texto.'%')
        ->orwhere('Dni', 'LIKE','%'.$texto.'%')
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('paciente.index', compact('pacientes', 'texto'));
    }

    public function create()
    {
        $generos = Genero::all();
        $pronombres = Pronombre::all();
        $educaciones = Educacion::all();
        return view('paciente.create', compact('generos', 'pronombres', 'educaciones'));
    }

    public function store(PacienteCreateRequest $request)
    {
        try
        {
            $data = $request->validate([
                'email' =>['Required', 'email', 'unique:users,Email'],
                'dni' => 'required|unique:users|max:255',
            ]);

            $data = $request->validate([
                'email' =>['Required', 'email', 'unique:pacientes,Email'],
                'dni' => 'required|unique:pacientes|max:255',
            ]);

            $user = User::create([
                'name' => $request->get('nombre'),
                'email' => $request->get('email'),
                'dni' => $request->get('dni'),
                'password' => Hash::make('123456'),
                'fullacces' => 'no',
                'apellido' => $request->get('apellido'),
                'codigo' => 'paciente'
            ]);

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
            $paciente->telefono = $request->get('telefono');
            $paciente->telefono_alternativo = $request->get('telefono_alternativo');
            $paciente->isActive = true;
            $paciente->user_id=$user->id;
            $paciente->FatherUserId = auth::user()->id;
            $paciente->FechaNacimiento = $request->get('fechaNacimiento');
            $paciente->save();

            return redirect('/paciente');
        }
        catch(Exception $e){
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }

    public function destroy($id)
    {
        $paciente = Paciente::find($id);

        DB::table('users')->delete($paciente->user_id);
        DB::table('pacientes')->delete($id);

        return redirect('/paciente');
    }

    public function show($id)
    {
        $paciente = Paciente::find($id);
        $generos = Genero::all();
        $pronombres = Pronombre::all();
        $educaciones = Educacion::all();

        return view('paciente.editAdmin', ['paciente'=>$paciente, 
        'generos'=>$generos, 
        'pronombres' => $pronombres,
        'educaciones' => $educaciones]);
    }

    public function showPaciente()
    {
        $dni = auth::user()->dni;
        $paciente = DB::table('pacientes')
            ->where('Dni', $dni)
            ->first();
        $generos = Genero::all();
        $pronombres = Pronombre::all();
        $educaciones = Educacion::all();

        return view('editPaciente', ['paciente'=>$paciente, 
        'generos'=>$generos, 
        'pronombres' => $pronombres,
        'educaciones' => $educaciones]);
    }

    public function update(PacienteCreateRequest $request)
    {
        // $data = $request->validate([
        //     'email' =>['Required', 'email', 'unique:users,Email'],
        //     'dni' => 'required|unique:users|max:255',
        //     'perfilFoto' => 'image|max:2048',
        // ]);
        $paciente = Paciente::find($request->id);

        if($request->perfilFoto != null)
        {
            $imageUrl = $request->file('perfilFoto')->store('public/imagenes/'. $request->dni);
            $url = Storage::url($imageUrl);
        }
        else
            $url = $paciente->ImageUrl;

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
        $paciente->ImageUrl = $url ?? "";
        $paciente->telefono = $request->telefono;
        $paciente->FechaNacimiento = $request->fechaNacimiento;
        $paciente->telefono_alternativo = $request->telefono_alternativo;
        $paciente->save();

        if(auth::user()->fullacces == 'yes')
            return redirect('/paciente');
        else
            return redirect()->to('homePaciente')->with('paciente', $request->id);
    }

    public function showHistorial($id)
    {
        return view('hclinica.indexAdmin');
    }
}
