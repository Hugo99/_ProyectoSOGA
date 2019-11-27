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

                    <div class="form-group row">

                      <div class="col-md-3">

                      </div>

                        <div class="col-3">
                          <label align="left">Saleccionar area:</label>
                        </div>


                        <div class="col-mb-5">

                          <select name="id_area" class="custom-select @error('area') is-invalid @enderror" id="id_area" required>
                              @foreach ($area as $item)
                                <option name="area" value="{{$item->id}}" class="form-control">{{$item->name_area}}</option>
                              @endforeach
                           </select>

                         </div>

                    </div>

                    <div class="form-group row">
                        <label class="col-md-5 col-form-label text-md-right">{{ __('Recomendación') }}</label>
                        <div class="col-md-6">
                            <input id="recomendacion" class="form-control" required name="recomendacion">

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
                          <input id="descripcion" class="form-control" required name="descripcion">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-5 col-form-label text-md-right" align="right">{{ __('Metas') }}</label>
                        <div class="col-md-6">
                          <input id="Metas" class="form-control" required name="metas">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-5 col-form-label text-md-right" align="right">{{ __('Acciones') }}</label>
                        <div class="col-md-6">
                          <input id="Acciones" class="form-control" required name="acciones">
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
