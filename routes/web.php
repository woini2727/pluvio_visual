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
/*Route::get('/informes','UsuariosController@index');
Route::get('/informes/{usuario}','UsuariosController@show');


Route::get('/', function () {
    return view('welcome',[
      'name' => 'Sss'
    ]);
});

Route::get('/test',function(){
  return view('form');
});
Route::get('firebase','FirebaseController@index');

Route::post('/informes.mensajes','UsuariosController@store');*/

Route::get('/',function (){
    return view('menu');
});

Route::get('/lujan/{id}',function (){
    $estacion = [
        "nombre" =>"lujan",
        "id"=>2,
        "informes"=>["Anual","Mensual","Diario"]
    ];
    return view("informes/menu_informes",compact('estacion'));
});

Route::get('/san_andres/{id}',function (){
    $estacion = [
        "nombre" =>"san andres",
        "id" => 1,
        "informes"=>["Anual","Mensual","Diario"]
    ];
    return view("informes/menu_informes",compact('estacion'));
});

Route::get('/lujan/{id}/{tipo_informe}','InformeController@show');
Route::get('/san_andres/{id}/{tipo_informe}','InformeController@show');
Route::get('/datos_informes/{tipo_informe}/{id_reporte}','InformeController@alldata');
Route::get('/promedio/{tipo_informe}/{id_reporte}','InformeController@promedio');
Route::get('/datos_registrados/{tipo_informe}/{id_reporte}','InformeController@datos_reg');
Route::get('/customers/pdf','InformeController@export_pdf')->name('customer.pdf');
