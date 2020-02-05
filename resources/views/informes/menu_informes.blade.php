@extends('layout')

@section('content')

<div class="container">
    <h1 class="text-center mt-3 display-4">Estación RMA2_LUJ:</h1>
</div>
<div class="container h4">
  <ul class="list-group h3">
      @foreach ($estacion as $e)

    <li class="list-group-item mt-3 " ><a href={{$e}}/anual>Anual</a></li>
    <li class="list-group-item mt-3"><a href={{$e}}/mensual>Mensual</a></li>
    <li class="list-group-item mt-3"><a href={{$e}}/diario>Diario</a></li>
    @endforeach
  </ul>

</div>
@endsection
