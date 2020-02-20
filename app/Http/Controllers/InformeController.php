<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class InformeController extends Controller
{
    public function show($id,$tiporeporte){
        $estacion = DB::table('estacion')->where('id_estacion', "=",$id)->first();
        $informes_anuales = DB::table('reporte')
            ->where('id_estacion',"=",$estacion->id_estacion)
            ->where('tipo_reporte',"=", strtolower($tiporeporte))
            ->orderBy('id_esp')
            ->get();

        return view("grids/grid",compact('informes_anuales'),compact('estacion','tiporeporte'));
        #return "";
    }

    public function alldata($tiporeporte,$id_reporte){
        $reporte= DB::table('reporte')->where('id_reporte','=',$id_reporte)->first();
        $promedio = DB::table('promedio')->where('id_reporte',"=",$id_reporte)->first();
        $datos_reg = DB::table('datos_registrados')->where('id_reporte',"=",$id_reporte)->get();
        return view("grids/grid_datos_informes",compact('promedio','tiporeporte','reporte'),compact('datos_reg'));
    }
    public function promedio($tiporeporte,$id_reporte){
        $reporte= DB::table('reporte')->where('id_reporte','=',$id_reporte)->first();
        $promedio = DB::table('promedio')->where('id_reporte',"=",$id_reporte)->first();
        return view("grids/grid_datos_promedio",compact('promedio','tiporeporte','reporte'));
    }
    public function datos_reg($tiporeporte,$id_reporte){
        $reporte= DB::table('reporte')->where('id_reporte','=',$id_reporte)->first();
        $datos_reg = DB::table('datos_registrados')->where('id_reporte',"=",$id_reporte)->get();
        return view("grids/grid_datos_reg",compact('datos_reg','tiporeporte','reporte'));
    }
}
