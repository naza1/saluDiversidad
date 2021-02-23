<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacientController extends Controller
{
    public function index()
    {
       return view('pacient.index');
    }

    public function create()
    {
        return view('pacient.create');
    }
}
