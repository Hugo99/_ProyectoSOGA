@extends('sidebar')

@section('title', "Recomendación")

@section('seccion')
    <style media="screen">
        .card {
            height: 380px;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Crear Recomendación') }}</div>
                    <form method="POST" action="{{ route('registraRecom') }}">
                    @csrf

                    <p>

                    <div class="form-group md-7"  align="center">
                      <select name="id" class="custom-select" id="id_area">
                        <option selected>Seleccione área</option>
                        @foreach ($area as $item)
                          <option name ='id_area' value="{{$item->id}}">{{$item->name_area}}</option>
                        @endforeach
                       </select>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-5 col-form-label text-md-right">{{ __('Recomendación') }}</label>
                        <div class="col-md-6">
                            <input id="recomendacion" class="form-control" name="recomendacion">

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                      </div>

                      <div class="form-group row">
                        <label class="col-md-5 col-form-label text-md-right" align="right">{{ __('Descripción') }}</label>
                        <div class="col-md-6">
                          <input id="descripcion" class="form-control" name="descripcion">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-5 col-form-label text-md-right" align="right">{{ __('Metas') }}</label>
                        <div class="col-md-6">
                          <input id="Metas" class="form-control" name="metas">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-5 col-form-label text-md-right" align="right">{{ __('Acciones') }}</label>
                        <div class="col-md-6">
                          <input id="Acciones" class="form-control" name="acciones">
                        </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Agregar') }}
                              </button>
                          </div>
                      </div>

                    </form>
                  </div>
              </div>
          </div>
      </form>
@endsection
