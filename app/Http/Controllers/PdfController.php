<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
use DB;
use Carbon\Carbon;
  
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

        $date = new Carbon(request()->estudio['created_at']);
        $data = [
            'fecha' => $date->toFormattedDateString('d-m-Y'),
            'nombre' => request()->estudio['NombrePaciente'],
            'apellido' => request()->estudio['ApellidoPaciente'],
            'estudios' => explode(',', request()->estudio['Estudios']),
            'dni' => request()->estudio['Dni'],
            'SocialWork' => $paciente->SocialWork,
            'NroAfiliado' => $paciente->NroAfiliado,
        ];
        $pdf = PDF::loadView('pdf.estudios', $data);

        $fileName = "orden".request()->estudio['NombrePaciente'].request()->estudio['ApellidoPaciente'].date(NOW()).".pdf";
        return $pdf->download($fileName);
    }

    public function generateReceta(Request $request)
    {
        $paciente = DB::table('pacientes')
        ->where('id', '=', request()->receta['paciente_id'])
        ->first();
        
        $recetasMedicamentos = DB::table('recetas')
        ->join('medicamento__recetas', 'recetas.id', '=', 'medicamento__recetas.receta_id')
        ->join('medicamentos', 'medicamento__recetas.medicamento_id', '=', 'medicamentos.id')
        ->where('paciente_id', '=', $paciente->id)
        ->where('receta_id', '=', request()->receta['id'])
        ->get();

        $receta = DB::table('recetas')
        ->where('id', '=', request()->receta['id'])->first();
       
        $result = null;
        foreach($recetasMedicamentos as $recetaMdicamento)
        {
            $result = $result.$recetaMdicamento->nombre." x ".$recetaMdicamento->cantidad.", ";
        }

        $date = new Carbon(request()->receta['created_at']);
        $data = [
            'fecha' => $date->toFormattedDateString('d-m-Y'),
            'nombre' => request()->receta['NombrePaciente'],
            'apellido' => request()->receta['ApellidoPaciente'],
            'recetas' => explode(',', $result),
            'dni' => request()->receta['Dni'],
            'SocialWork' => $paciente->SocialWork,
            'NroAfiliado' => $paciente->NroAfiliado,
            'adicional' => $receta->Adicional,
            'medico' => $receta->Medico,
        ];
        $pdf = PDF::loadView('pdf.recetas', $data);

        $fileName = "receta".request()->receta['NombrePaciente'].request()->receta['ApellidoPaciente'].date(NOW()).".pdf";
        return $pdf->download($fileName);
    }
}