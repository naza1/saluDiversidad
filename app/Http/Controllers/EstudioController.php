<?php

namespace App\Http\Controllers;

use App\Models\Estudio;
use Illuminate\Http\Request;

class EstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('estudio.indexPaciente');
    }

    public function indexEstudioAdmin()
    {
        return view('estudio.indexAdmin');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function show(Estudio $estudio)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudio $estudio)
    {
        //
    }
}
