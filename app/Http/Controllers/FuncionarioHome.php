<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioHome extends Controller
{
    public function FuncionarioHome(request $request)
    {
        return view('FuncionarioHome');
    }
}
