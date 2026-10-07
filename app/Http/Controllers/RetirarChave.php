<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RetirarChave extends Controller
{
    public function RetirarChave(request $request)
    {
        return view('RetirarChave');
    }
}
