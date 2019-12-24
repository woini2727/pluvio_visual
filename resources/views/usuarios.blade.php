@extends('layout')
@section('content')
<ul>
  @foreach ($usuarios as $usuario)
  <li>
    {{$usuario->token}}
  </li>
@endforeach
</ul>
@endsection
