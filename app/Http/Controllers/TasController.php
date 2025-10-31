<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasController extends Controller
{
    public function tas_inicio(){
        return view('tas.inicio');
    }
}
