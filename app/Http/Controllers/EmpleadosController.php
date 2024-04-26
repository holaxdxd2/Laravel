<?php

namespace App\Http\Controllers;
use App\Models\Coche;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index(){

        $temp=Coche::find(1);
        return $temp->Empleado;
    }
}
