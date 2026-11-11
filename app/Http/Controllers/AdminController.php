<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function mostrarAdmin(Request $request)
    {
        return view('painel')
            ->with('usuario', $request->usuario)
            ->with('admin', $request->admin);
    }
}
