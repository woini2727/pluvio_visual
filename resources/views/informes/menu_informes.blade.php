@extends('layout')

@section('content')

<div class="container">
    <h1 class="text-center mt-3 display-4">Estación :</h1>
</div>
<div class="container h4">
  <ul class="list-group h3">

    @foreach($estacion["informes"] as $e)
    <li class="list-group-item mt-3 " ><a href="{{$estacion["id"]}}/{{$e}}">{{$e}}</a></li>
    @endforeach
  </ul>

</div>
@endsection
