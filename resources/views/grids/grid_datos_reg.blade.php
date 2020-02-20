@extends('layout')
@section('content')

    <h1 class="bg-white m-4 ">Datos registrados {{$reporte->fecha}} </h1>
    <div class="table-wrapper-scroll-y my-custom-scrollbar table-hover ">
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
                <td>{{$d->hum_relat_media}} %</td>
                <td>{{$d->temp_media}}°C</td>
                @elseif($tiporeporte == "Mensual")
                    <td>{{$d->dia}}</td>
                    <td>{{$d->hum_relat_min}} %</td>
                    <td>{{$d->hum_relat_max}} %</td>
                @elseif($tiporeporte == "Diario")
                <td>{{$d->hora}} hs</td>
                <td>{{$d->temp}}°C</td>
                <td>{{$d->hum_relat}} %</td>
                @endif
                @if($tiporeporte == "Anual" or $tiporeporte == "Mensual")
                    <td>{{$d->temp_min}}°C</td>
                    <td>{{$d->temp_max}}°C</td>
                @endif
                 @if($tiporeporte == "Diario" or $tiporeporte == "Mensual")
                    <td>{{$d->dir_viento}}</td>
                 @endif
                <td>{{$d->presion_atm}} hPa</td>
                <td>{{$d->precip_relat}} mm</td>
                <td>{{$d->vel_viento}} m/s</td>

            </tr>
        @endforeach

        </tbody>
    </table>
    </div>

    @endsection
