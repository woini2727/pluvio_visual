@extends('layout')

@section('content')
<form class="" action="/usuarios.mensajes" method="post">
  <div class="form-group">
    <h1>Mensaje</h1>
      <textarea class="form-control" rows="3"  id="mensaje" name="mensaje"></textarea>
    <input type="text" hidden="true" id="token" name="token" value="12">
  </div>
    <div class="form-group">
      <input type="submit" name="" value="Enviar" class="btn btn-primary">
  {{csrf_field()}}
  </div>
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
