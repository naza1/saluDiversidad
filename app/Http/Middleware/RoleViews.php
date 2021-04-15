<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\Paciente;
use App\Models\Noticia;

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
       {
            return redirect()->to('dashboardAdmin');
       }

        if(password_verify('123456', auth::user()->password)) 
        {
            return redirect()->to('changePassword');
        }

        if($request->path() == 'home')
        {    
            $paciente = DB::table('pacientes')
            //->where('UserId','=', auth::user()->id)
            ->orderBy('id', 'desc')
            ->first();
            
            return redirect()->to('homePaciente')
                ->with('paciente', $paciente->id);
        }
        
        return $next($request);
    }
}
