<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\UsuarioToken;
use Carbon\Carbon;
use app\Models\Usuario;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($Request->has(token) && $Request->has('usuario_id')){
            $token = UsuarioToken::where('usuario_id', $request->usuario_id)
            ->where('token', $request->token)
            ->where('valido_ate', '>', Carbon::now())
            ->first();
            if($token){

                return $next($request);
            }
        
            return response()->json(['message' => 'Token inválido ou expirado.'], 401);
        }else{
            return response()->json(['message' => 'Token não fornecido',
            'erro' => 's'], 400);
        }
    }
}
