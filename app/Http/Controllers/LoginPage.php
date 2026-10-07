<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginPage extends Controller
{
    public function LoginPage(request $request)
    {
        return view('LoginPage');
    }
}
