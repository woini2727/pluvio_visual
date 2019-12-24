@extends('layout')

@section('content')
<form class="" action="/" method="get">
  <div class="form-group">
    <h1>Mensaje</h1>
      <textarea class="form-control" rows="3"></textarea>
      </div>
      <input type="submit" name="" value="Enviar" class="btn btn-primary">
</form>
@endsection

@section('footer')
  <footer class="text-muted">
    <div class="container">
      <p class="float-right">
        <a href="/">Volver al menú</a>
      </p>

    </div>
  </footer>
@endsection
