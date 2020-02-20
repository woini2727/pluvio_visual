
    <nav class="navbar navbar-expand-md fixed-top  p-0 pt-1 border-secondary border-top border-bottom" style=" background-color: #e3f2fd;">
        <div class="container">
            <div class="navbar-brand text-primary m-0 p-0" href="#">
        <ul class="navbar-nav ml-auto">
           <li class="nav-item ">
                <a class="nav-link font-weight-bold active "   href="/">Estaciones</a>
            </li>

            <li class="nav-item dropdown" >
                <a class="nav-link disabled dropdown-toggle" id="dd" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" >Reporte</a>
                <div class="dropdown-menu">
                    @if(isset($estacion->ema))
                        @if($estacion->ema == "Luján")
                            @php($est="lujan")
                            <a class="dropdown-item" href=/{{$est}}/{{$estacion->id_estacion}}/Anual>Anual</a>
                            <a class="dropdown-item" href=/{{$est}}/{{$estacion->id_estacion}}/Mensual>Mensual</a>
                            <a class="dropdown-item" href=/{{$est}}/{{$estacion->id_estacion}}/Diario>Diario</a>
                        @else
                            @php($est="san andres")
                    <a class="dropdown-item" href=/{{$est}}/{{$estacion->id_estacion}}/Anual>Anual</a>
                    <a class="dropdown-item" href=/{{$est}}/{{$estacion->id_estacion}}/Mensual>Mensual</a>
                    <a class="dropdown-item" href=/{{$est}}/{{$estacion->id_estacion}}/Diario>Diario</a>
                        @endif
                        @endif
                </div>
            </li>
        </ul>
            </div>
        </div>
    </nav>

