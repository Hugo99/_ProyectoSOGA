@extends('sidebar')

@section('seccion')
<h1>{{$datos->name_area}}</h1>

<form action="" method="POST">
  @csrf

  <div class="form-group">
    <label class="">Actividad</label>
    <input class="form-control" type="text" name="actividad" value="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFileLang" lang="es">
    <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
  </div>

  <div class="form-group">
    <button type="submit" name="btnAct" class="btn btn-primary"> Subir actividad </button>
  </div>

</form>
@endsection
