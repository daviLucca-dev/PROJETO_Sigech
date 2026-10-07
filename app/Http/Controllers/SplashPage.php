<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SplashPage extends Controller
{
    public function SplashPage(request $request)
    {
        return view('SplashPage');
    }
}
