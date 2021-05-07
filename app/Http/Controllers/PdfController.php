<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
use DB;
  
class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('pdf.myPDF', $data);
    
        return $pdf->download('itsolutionstuff.pdf');
    }

    public function generateOrden(Request $request)
    {
        $paciente = DB::table('pacientes')
        ->where('id', '=', request()->estudio['paciente_id'])
        ->first();

        $data = [
            'fecha' => date("Y-m-d H:i"),
            'nombre' => request()->estudio['NombrePaciente'],
            'apellido' => request()->estudio['ApellidoPaciente'],
            'estudios' => explode(',', request()->estudio['Estudios']),
            'dni' => request()->estudio['Dni'],
            'SocialWork' => $paciente->SocialWork,
            'NroAfiliado' => $paciente->NroAfiliado,
        ];
        $pdf = PDF::loadView('pdf.estudios', $data);

        return $pdf->download('itsolutionstuff.pdf');
    }

    public function generateReceta(Request $request)
    {
        $paciente = DB::table('pacientes')
        ->where('id', '=', request()->estudio['paciente_id'])
        ->first();
        
        $data = [
            'fecha' => date("Y-m-d H:i"),
            'nombre' => request()->receta['NombrePaciente'],
            'apellido' => request()->receta['ApellidoPaciente'],
            'recetas' => explode(',', request()->receta['Recetas']),
            'dni' => request()->receta['Dni'],
            'SocialWork' => $paciente->SocialWork,
            'NroAfiliado' => $paciente->NroAfiliado,
        ];
        $pdf = PDF::loadView('pdf.recetas', $data);

        return $pdf->download('itsolutionstuff.pdf');
    }
}