<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
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
}
