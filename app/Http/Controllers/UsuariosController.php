<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;

class UsuariosController extends Controller
{
    public function index(){
      $usuarios = Usuarios::all();
      return view('/usuarios',compact('usuarios'));
    }
    public function show($id){
      $usuario = Usuarios::find($id);
      return view('/usuario',compact('usuario'));
    }
}
