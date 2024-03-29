<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Genero;
use App\Models\User;
use App\Models\Turno;
use App\Models\Receta;
use App\Models\Estudio;
use App\Models\Pronombre;
use App\Models\Educacion;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\PacienteCreateRequest;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use DateTime;
use Carbon\Carbon;

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
                'email' =>['Required', 'email', 'unique:pacientes,Email'],
                'dni' => 'required|unique:pacientes',
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
        \Log::info('Eliminando estudio para el paciente: '.$id);

        $paciente = Paciente::find($id);

        Turno::where('paciente_id', $paciente->id)->delete();
        Receta::where('paciente_id', $paciente->id)->delete();
        Estudio::where('paciente_id', $paciente->id)->delete();
        DB::table('pacientes')->delete($id);
        DB::table('users')->delete($paciente->user_id);

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
        $paciente = Paciente::find($request->id);

        $data = $request->validate([
            'email' =>['Required', 'email', Rule::unique('pacientes')->ignore($paciente->user_id, 'user_id')],
            'dni' => 'required', Rule::unique('pacientes')->ignore($paciente->dni, 'dni'),
            'perfilFoto' => 'image|max:5000',
        ]);

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
        $paciente->tutor = $request->tutor;
        $paciente->medicacion = $request->medicacion;
        $paciente->save();

        if(auth::user()->fullacces == 'yes')
            return redirect('/paciente');
        else
            return redirect()->to('homePaciente')->with('paciente', $request->id);
    }

    public function showHistorial($id)
    {
        $estudioFiles = DB::table('estudio_files')
        ->where('paciente_id', '=', $id)
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        $recetas = DB::table('recetas')
        ->where('paciente_id', '=', $id)
        ->where('IsDeleted', '=', 0)
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        $recetaIds = DB::table('recetas')
        ->select('id')
        ->where('paciente_id', '=', $id)
        ->where('IsDeleted', '=', 0);

        $recetasMedicamentos = DB::table('medicamentos')
        ->join('medicamento__recetas', 'medicamentos.id', '=', 'medicamento__recetas.medicamento_id')
        ->select('medicamentos.nombre', 'medicamento__recetas.receta_id')
        ->whereIn('receta_id', $recetaIds)
        ->get();

        $estudios = DB::table('estudios')
        ->where('paciente_id', '=', $id)
        ->where('Estado', '=', "Asignado")
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        $paciente = DB::table('pacientes')
        ->where('id', '=', $id)
        ->first();

        $consultas = DB::table('consultas')
        ->where('paciente_id', '=', $id)
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        $date = new DateTime($paciente->FechaInicioHormonizacion);
        $date2 = new DateTime("now");
        $diff = $date2->diff($date);
        $diff2 = $diff->format('%y años %m meses %d días');

        return view('hclinica.indexAdmin', compact('estudioFiles', 'recetas', 'estudios', 'paciente', 'consultas', 'diff2', 'recetasMedicamentos'));
    }

    public function saveHormonizacion(Request $request){

        $paciente = Paciente::find($request->id);
        
        $fecha = new Carbon($request->get('inicio_hormonizacion'));
        $paciente->FechaInicioHormonizacion = $fecha->toDateString();
        $paciente->save();

        return redirect()->to('showHistorial/'.$paciente->id)->with('paciente', $request->id);
    }
}
