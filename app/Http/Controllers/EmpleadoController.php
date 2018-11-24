<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EmpleadoController extends Controller
{
    public function index()
    {
    	$empleados = User::get();
    	return view('empleados.index', compact('empleados'));
    }
}
