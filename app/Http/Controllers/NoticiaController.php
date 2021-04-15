<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use DB;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $noticias = DB::table('noticias')
        ->where('Contenido', 'LIKE','%'.$texto.'%')
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('noticia.index', compact('noticias', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('noticia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noticia = new Noticia;
        $noticia->fecha = $request->get('fecha');
        $noticia->contenido = $request->get('contenido');
        $noticia->titulo = $request->get('titulo');
        $noticia->save();

        return redirect('/noticia');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = Noticia::find($id);

        return view('noticia.edit', ['noticia'=>$noticia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $noticia = Noticia::find($request->id);

        $noticia->Fecha = $request->fecha;
        $noticia->Contenido = $request->contenido;
        $noticia->Titulo = $request->titulo;
        $noticia->save();

        return redirect('/noticia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticia = Noticia::find($id);

        DB::table('noticias')->delete($id);

        return redirect('/noticia');
    }
}
