<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function mostrarHome(Request $request)
    {
        if ($request->admin === 'S') {
            return redirect()->route('painel');
        }

        return redirect()->route('funcionario.home');
    }
}
