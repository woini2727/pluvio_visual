<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Route::get('/usuarios','UsuariosController@index');
Route::get('/usuarios/{usuario}','UsuariosController@show');


Route::get('/', function () {
    return view('welcome',[
      'name' => 'Sss'
    ]);
});

Route::get('/test',function(){
  return view('form');
});
Route::get('firebase','FirebaseController@index');

Route::post('/usuarios.mensajes','UsuariosController@store');*/

Route::get('/',function (){
    return view('menu');
});
