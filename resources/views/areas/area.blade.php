@extends('sidebar')

@section('title', $datos->name_area)

@section('seccion')
<h1>{{$datos->name_area}}</h1>

<table class="table">
  <thead class="">
    <tr>
      <th scope="col">Recomendaciones</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Meta</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
    @foreach($recom as $item)
        <tr>
          <td>{{$item['recomendacion']}}</th>
          <td>{{$item['descripcion']}}</td>
          <td>{{$item['metas']}}</td>
          <td>{{$item['acciones']}}</td>
        </tr>
    @endforeach
  </tbody>
</table>


<?php $per = Auth()->user()->id_area; if ( $per == $datos->id || $per == 1): ?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">{{ __('Registro de actividad') }}</div>
            <div class="card-body">

              <form method="POST" action="{{route('subActividades')}}" enctype="multipart/form-data">
                @csrf

                <input  type="hidden" name="id_area" value="{{$datos->id}}">

                <div class="form-group">
                  <label class="col-md-4 col-form-label">{{ __('Título') }}</label>

                  <div class="col-md-6">
                    <input class="form-control" type="text" name="actividad" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1" class="col-10 col-form-label">{{ __('Descripción')}}</label>

                  <div>
                    <label class="col-form-label col-md-11" for="texto">
                       <textarea class="form-control" name="texto" data-required="true"></textarea>
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-5" for=''>Subir archivo</label>
                  <div class="col-md-10">
                    <input type="file" name='archivos' >
                  </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <button type="submit"  class="btn btn-primary">
                          Subir actividad
                        </button>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<table class="table">
  <thead class="">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Archivo</th>
    </tr>
  </thead>
  <tbody>
    <?php $activ = App\Actividades::all();
          $activ = App\Actividades::where("id_area","=",$datos->id);
     ?>
    @foreach($activ as $item)
        <tr>
          <td>{{$item['id']}}</th>
          <td>{{$item['actividad']}}</td>
          <td>{{$item['descripcion']}}</td>
          <td>{{$item['archivos']}}</td>
        </tr>
    @endforeach
  </tbody>
</table>

@endsection
