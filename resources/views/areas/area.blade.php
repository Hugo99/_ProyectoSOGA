@extends('sidebar')

@section('seccion')
<h1>{{$datos->name_area}}</h1>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">{{ __('Registro actividad') }}</div>
          <div class="card-body">

                                  <?php #Ruta donde este guardado el proyecto ?>
            <form method="POST" action="/Users/hugoeguino/_ProyectoSOGA/_ProyectoSOGA" accept-charset="UTF-8" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                <label class="col-md-4 col-form-label">{{ __('Actividad') }}</label>

                <div class="col-md-6">
                  <input class="form-control" type="text" name="actividad" value="">
                </div>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1" class="col-md-4 col-form-label">{{ __('Descripcion Actividad')}}</label>

                <div class="col-md-12">
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>

              <!--<div class="form-group">
                <div class="col-md-7 form-control">
                  <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                </div>

                <input type="file" class="custom-file-input" id="customFileLang" lang="es">
              </div>-->

              <div class="col-md-7 form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" class="custom-file-input" id="customFileLang" lang="es">

                <div class="form-group">
                  <label class="control-label">Nuevo Archivo</label>
                  <div class="col-md-11">
                    <input type="file" class="form-control" name="file" >
                  </div>
                </div>

              </div>

              <div class="form-group row mb-0">
                  <div class="col-md-6">
                      <button type="submit" name="btnAct" class="btn btn-primary">
                        {{__('Subir actividad')}}
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
@endsection
