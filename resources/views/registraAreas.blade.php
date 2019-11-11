@extends('sidebar')

@section('seccion')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registra Area') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('registraAreas') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del area*') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                          <div class="form-group row">

                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">

                                          </p>
                                          <div class="form-group row">
                                              <label class="col-md-5 col-form-label text-md-right">{{ __('Recomendacion') }}</label>
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
                                              <label class="col-md-5" align="right">{{ __('Descripción') }}</label>
                                              <div class="col-md-6">
                                                <input id="descripcion" class="form-control" name="descripcion">
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <label class="col-md-5" align="right">{{ __('Metas') }}</label>
                                              <div class="col-md-6">
                                                <input id="Metas" class="form-control" name="Metas">
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <label class="col-md-5" align="right">{{ __('Acciones') }}</label>
                                              <div class="col-md-6">
                                                <input id="Acciones" class="form-control" name="Acciones">
                                              </div>
                                            </div>

                                          </div>
                                      </div>
                                  </div>
                              </div>

                          </div>

                        <button name="agregar" type="button">Agregar recomendacion</button>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</footer>

@endsection
