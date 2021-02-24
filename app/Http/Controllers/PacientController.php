<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacient;
use DB;

class PacientController extends Controller
{
    public function index()
    {
        //$pacients = DB::table('pacients')->get();

        $pacients['pacients'] = Pacient::paginate(3);

        return view('pacient.index', $pacients);
    }

    public function create()
    {
        return view('pacient.create');
    }
}
