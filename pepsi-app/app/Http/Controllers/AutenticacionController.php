<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutenticacionController extends Controller
{
    public function signin()
    {
        return view('signin');
    }
}
