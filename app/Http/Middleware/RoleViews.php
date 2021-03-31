<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\Paciente;
use App\Models\Genero;

class RoleViews
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       if(auth::user()->fullacces == 'yes')
        return $next($request); //If admin show list of pacientes

        if(password_verify('123456', auth::user()->password)) {
            return redirect()->to('changePassword');
        }

        $paciente = DB::table('pacientes')
            ->where('UserId','=',auth::user()->id)
            ->first();

        if($request->path() == 'paciente')
            return redirect()->to('homePaciente')->with('paciente', $paciente->id);
        else
            return $next($request);
    }
}
