@extends('layout')
@section('content')
    <div class="container mb-4">
        <h1 class="display-4">Estación de {{$estacion->ema}}</h1>
        <h1 class="display-5">Reporte {{$tiporeporte}}</h1>

    </div>


    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            @if($tiporeporte=="Anual")
                <th>AÑO</th>
            @elseif($tiporeporte=="Mensual")
                <th>MES/AÑO</th>
            @else
                <th>FECHA</th>
            @endif
            <th>Ingresar</th>


        </tr>
        </thead>
        <tbody>
        @php($n=1)
        @foreach($informes_anuales as $i)
        <tr>
            <th scope="row">{{$n++}}</th>
            @if($tiporeporte=="Anual")
                <td>{{$i->anio}}</td>
            @elseif($tiporeporte=="Mensual")
                <td>{{substr($i->id_esp,1,2)."/".substr($i->id_esp,3,2)}}</td>
            @else
                <td>{{substr($i->id_esp,1,2)."/".substr($i->id_esp,3,2)."/".substr($i->id_esp,5,4)}}</td>
            @endif
            <td><a href=/datos_informes/{{$tiporeporte}}/{{$i->id_reporte}}>Ver</a></td>

        </tr>
        @endforeach
        </tbody>
    </table>


    @endsection
