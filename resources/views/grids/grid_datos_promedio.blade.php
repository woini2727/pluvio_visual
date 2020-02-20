@extends('layout')
@section('content')
    <div class="container mb-3 bg-white">
        <h1 class="">Promedio del reporte {{$tiporeporte}} {{$reporte->fecha}}</h1>
    </div>

    <h4>Temperatura:</h4>

    <table class="table">
        <thead>
        <tr>
            <th>Fecha</th>
            @if($tiporeporte=="Anual" or $tiporeporte=="Mensual" )
                <th>Temp. Media</th>
            <th>Temp. Min media</th>
            <th>Temp. Max media</th>
            <th>Temp. Min abs</th>
            <th>Temp. Max abs</th>
            @else
                <th>Temp. Min</th>
                <th>Temp. Max</th>
                <th>Temp. Media</th>
                @endif
        </tr>

        </thead>
        <tbody>
        <tr>
            <td></td>
            @if($tiporeporte=="Anual" or $tiporeporte=="Mensual" )
            <td>{{$promedio->temp_media}} C°</td>
            <td>{{$promedio->temp_min_media}} C°</td>
            <td>{{$promedio->temp_max_media}} C°</td>
            <td>{{$promedio->temp_min_abs}} C°</td>
            <td>{{$promedio->temp_max_abs}} C°</td>
            @else
            <td>{{$promedio->temp_min}}</td>
            <td>{{$promedio->temp_max}}</td>
            <td>{{$promedio->temp_media}}</td>
                @endif

        </tr>

        </tbody>
    </table>

    <h4 class="mb-2">Precipitación y presión:</h4>
    <table class="table">
        <thead>

        <tr>
            @if($tiporeporte=="Anual" or $tiporeporte=="Mensual" )
                <th>Precipitación total</th>
                <th>Precipitación Max. diaria</th>
            @else
                <th>Precipitación diaria</th>
                <th>Tasa Max. Precipitación</th>
            @endif
                @if($tiporeporte=="Anual" or $tiporeporte=="Mensual" )
                    <th>Presión media</th>
                    <th>Presión Min. absoluta</th>
                    <th>Presión Max. absoluta</th>
                @else
                    <th>Presión min.</th>
                    <th>Presión max.</th>
                    <th>Presión media</th>

                @endif

        </tr>
        </thead>
        <tbody>
        <tr>
            @if($tiporeporte=="Anual" or $tiporeporte=="Mensual" )
            <td>{{$promedio->precip_total}} mm</td>
            <td>{{$promedio->precip_max_diaria}} mm</td>
             <td>{{$promedio->presion_media}} hPa</td>
             <td>{{$promedio->presion_min_abs}} hPa</td>
             <td>{{$promedio->presion_max_abs}} hPa</td>
            @else
                <td>{{$promedio->precip_diaria}} mm</td>
                <td>{{$promedio->precip_tasa_max}} mm/min</td>
                <td>{{$promedio->presion_min}} hPa</td>
                <td>{{$promedio->presion_max}} hPa</td>
                <td>{{$promedio->presion_media}} hPa</td>
            @endif

        </tr>
        </tbody>
    </table>
    <h4 class="mb-2">Humedad y viento:</h4>
    <table class="table">
        <thead>
        <tr>
            @if($tiporeporte=="Anual" or $tiporeporte=="Mensual" )
                <th>Humedad relat. media</th>
                <th>Humedad relat. min absoluta</th>
                <th>Humedad relat. max absoluta</th>
            @else
                <th>Humedad relat. media</th>
                <th>Humedad relat. min.</th>
                <th>Humedad relat. max.</th>
            @endif
                <th>Viento medio</th>
                <th>Ráfaga max.</th>
                <th>Dir. viento</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            @if($tiporeporte=="Anual" or $tiporeporte=="Mensual" )
                <td>{{$promedio->hum_relat_media}} %</td>
                <td>{{$promedio->hum_relat_min_abs}} %</td>
                <td>{{$promedio->hum_relat_min_abs}} %</td>

            @else
                <td>{{$promedio->hum_relat_media}} %</td>
                <td>{{$promedio->hum_relat_min}} %</td>
                <td>{{$promedio->hum_relat_max}} %</td>

            @endif
                <td>{{$promedio->viento_medio}} m/s</td>
                <td>{{$promedio->rafaga_max}} m/s</td>
                <td>{{$promedio->dir_viento}} </td>

        </tr>
        </tbody>
    </table>

    @endsection
