<?php

namespace App\Http\Controllers;

use http\Env;
use Illuminate\Http\Request;
use App\Usuario;

class UsuariosController extends Controller
{
    public function index(){
      $usuarios = Usuario::all();
      return view('/usuarios',compact('usuarios'));
    }
    public function show($id){
      $usuario = Usuario::find($id);
      return view('/usuario',compact('usuario'));
    }
    public function store(){
        Usuario::create([
          'mensaje'=>request('mensaje'),
          'token'=>request('token')
        ]);
        $apiKey = env('API_KEY');
        $fields = array(
            request('mensaje'),
            request('token')
        );
        $headers = array('Autorization: key='.$apiKey,'Content-Type:application/json');
        $url = "https://fcm.googleapis.com/fcm/send";
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));

        $result = curl_exec($ch);
        curl_close();

        return redirect('/',compact(json_decode($result,true)));
    }
}
