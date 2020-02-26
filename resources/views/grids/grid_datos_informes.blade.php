@extends('layout')
@section('content')
    <div class="container mb-3 bg-white">
        <h1 class="">Promedio del reporte {{$tiporeporte}} {{$reporte->fecha}}</h1>
    </div>
    <a href="{{ route('customer.pdf') }}">Export PDF</a>

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
    <h1 class="bg-white">Datos registrados:</h1>
    <div class="table-wrapper-scroll-y my-custom-scrollbar table-hover">
    <table class="table">
        <thead>
        <tr>
            @if($tiporeporte == "Anual")
                <th>mes</th>
                <th>hum. relat. media</th>
                <th>Temp. media</th>
            @elseif($tiporeporte == "Mensual")
                <th>dia</th>
                <th>hum. relat. min</th>
                <th>hum. relat. max</th>
            @elseif($tiporeporte == "Diario")
                <th>hora</th>
                <th>Temp.</th>
                <th>hum. relat</th>
            @endif
            @if($tiporeporte == "Anual" or $tiporeporte == "Mensual")
                <th>Temp. min</th>
                <th>Temp.max</th>
                @endif
            @if($tiporeporte == "Diario" or $tiporeporte == "Mensual")
               <th>dir. viento</th>
                @endif
            <th>Presión atm.</th>
            <th>precip._relat</th>
            <th>vel. viento</th>
        </tr>
        </thead>
        <tbody>
        @foreach($datos_reg as $d)
            <tr>
                @if($tiporeporte == "Anual")
                <td>{{$d->mes}}</td>
                <td>{{$d->hum_relat_media}}</td>
                <td>{{$d->temp_media}}</td>
                @elseif($tiporeporte == "Mensual")
                    <td>{{$d->dia}}</td>
                    <td>{{$d->hum_relat_min}}</td>
                    <td>{{$d->hum_relat_max}}</td>
                @elseif($tiporeporte == "Diario")
                <td>{{$d->hora}}</td>
                <td>{{$d->temp}}</td>
                <td>{{$d->hum_relat}}</td>
                @endif
                @if($tiporeporte == "Anual" or $tiporeporte == "Mensual")
                    <td>{{$d->temp_min}}</td>
                    <td>{{$d->temp_max}}</td>
                @endif
                 @if($tiporeporte == "Diario" or $tiporeporte == "Mensual")
                    <td>{{$d->dir_viento}}</td>
                 @endif
                <td>{{$d->presion_atm}}</td>
                <td>{{$d->precip_relat}}</td>
                <td>{{$d->vel_viento}}</td>

            </tr>
        @endforeach

        </tbody>
    </table>
        </div>

    @endsection
