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

        #print_r($informes_anuales);
       /* foreach ($informes_anuales as $informe){
            #print_r($informe);
            $id_reporte=$informe->id_reporte;
            print($informe->id_reporte."\n" );
            $promedio=DB::table('promedio')
                ->where('id_reporte','=',$id_reporte)->get();
            print_r($promedio);

            $datos_reg=DB::table('datos_registrados')
                ->where('id_reporte',"=",$id_reporte)->get();
            print_r($datos_reg);
        }*/

        //return "informe {$tipoinforme}";
        #$hola="";
        #return view("grids/grid",compact('informes_anuales'),compact('estacion','hola'));
        return view("grids/grid",compact('informes_anuales'),compact('estacion','tiporeporte'));
        #return "";
    }

    public function promedio($tiporeporte,$id_reporte){

        $promedio = DB::table('promedio')->where('id_reporte',"=",$id_reporte)->first();
        $datos_reg = DB::table('datos_registrados')->where('id_reporte',"=",$id_reporte)->get();
        return view("grids/grid_datos_informes",compact('promedio','tiporeporte'),compact('datos_reg'));
    }
}
