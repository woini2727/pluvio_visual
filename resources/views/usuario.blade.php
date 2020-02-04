@extends('layout')
@section('content')
<div class="container">
  <h3>Usuario: {{$usuario->id}}</h3>
  <h3>Token: {{$usuario->token}}</h3>
</div>
@endsection
