<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
  
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
        $data = [
            'fecha' => date("Y-m-d H:i"),
            'nombre' => request()->estudio['NombrePaciente'],
            'apellido' => request()->estudio['ApellidoPaciente'],
            'estudios' => explode(',', request()->estudio['Estudios']),
        ];
        $pdf = PDF::loadView('pdf.estudios', $data);

        return $pdf->download('itsolutionstuff.pdf');
    }
}