<?php

namespace App\Http\Middleware;

use Closure;

class UsuarioBaneadoMiddlewareHernandez
{
    /**
    este middleware nos sirve para bannear a un usuario mientras esta navegando en la pagina
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->status != "100") {
            
            return $next($request);
        }
        else{
            return redirect('/logout');

        }

        
    }
}
