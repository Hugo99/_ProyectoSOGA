@extends('sidebar')

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
          <td>{{$item->recomedacion}}</th>
          <td>{{$item->descripcion}}</td>
          <td>{{$item->metas}}</td>
          <td>{{$item->acciones}}</td>
        </tr>
    @endforeach
  </tbody>
</table>

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
</div>

<script type="text/javascript">
    alert(
        "RECOMENDACIONES:\n\n-Nombres de archivos deben de ir sin espacios\n-Los archivos que se suban como evidencias deben de ser en formato tipo PDF"
    );
</script>
@endsection
