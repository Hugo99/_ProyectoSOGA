@extends('sidebar')

@section('seccion')
<h1>{{$datos->name_area}}</h1>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">{{ __('Registro actividad') }}</div>
          <div class="card-body">

            <form method="POST" action="{{route('subActividades')}}" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                <label class="col-md-4 col-form-label">{{ __('Actividad') }}</label>

                <div class="col-md-6">
                  <input class="form-control" type="text" name="actividad" value="">
                </div>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1" class="col-10 col-form-label">{{ __('Descripcion Actividad')}}</label>

                <div>
                  <label class="col-form-label col-md-11" for="texto">
                     <textarea class="form-control" name="texto" data-required="true"></textarea>
                  </label>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-5" for=''>saleccione archivo</label>
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
@endsection
