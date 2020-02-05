@extends('layout')
@section('content')
    <div class="container mb-4">
        <h1 class="display-4">Reporte {{$hola["a"]}} estación de {{$hola["b"]}}</h1>
    </div>


    <table class="table">
        <thead>
        <tr>
            <th>c1</th>
            <th>c1</th>
            <th>c1</th>
            <th>c1</th>

        </tr>
        </thead>
        <tbody>
        @foreach($informes_anuales as $i)
        <tr>
            <th scope="row">{{$i->id_reporte}}</th>
            <td>{{$i->id_estacion}}</td>
            <td>{{$i->anio}}</td>
            <td>{{$i->tipo_reporte}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>


    @endsection
