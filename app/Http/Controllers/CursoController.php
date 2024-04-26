<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Profile;

class CursoController extends Controller
{

public function index(){

    $temp=Profile::find(1);
    return $temp->user;
}
public function create(){


    return view('formulario');

 }

 public function store(Request $request){

    return $request->num1;


 }

 //primos


}
