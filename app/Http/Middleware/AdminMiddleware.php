<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
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

                $admin = Admin::where('id_usuario', $request->usuario_id)->first();
                if(!$admin){
                return $next($request);
                }else{
                    return response()->json(['message' => 'Acesso negado.'], 403);
                }
            }
        
            return response()->json(['message' => 'Token inválido ou expirado.'], 401);
        }else{
            return response()->json(['message' => 'Token não fornecido',
            'erro' => 's'], 400);
        }
    }
}
