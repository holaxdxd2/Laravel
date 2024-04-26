<?php

namespace App\Http\Controllers;
use App\Models\Empleados;

use Illuminate\Http\Request;

class CocheController extends Controller
{
    public function index(){

        $temp=Empleados::find(1);
        return $temp->Coche;
    }
}
