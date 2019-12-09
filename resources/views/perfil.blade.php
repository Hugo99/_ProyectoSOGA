@extends('sidebar')

@section('title', 'Perfil')

@section('seccion')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mis datos') }}</div>

                  <div class="card-body">
                      <form method="POST" action="{{ route('perfilAct') }}">
                          @csrf

                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre:') }}</label>
                              <p class="col-md-4 col-form-label">{{$usuario->name}}</p>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-4 col-form-label text-md-right">{{ __('Nombre de usuario:') }}</label>
                              <p class="col-md-4 col-form-label">{{$usuario->username}}</p>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-4 col-form-label text-md-right">{{ __('Correo electronico:') }}</label>
                              <p class="col-md-4 col-form-label">{{$usuario->email}}</p>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-4 col-form-label text-md-right">{{ __('Correo electronico:') }}</label>
                              <?php $ar = App\Areas::find($usuario->id_area);?>
                                <p class="col-md-4 col-form-label">{{$ar['name_area']}}</p>
                              <?php  ?>
                          </div>


                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                              <div class="col-md-6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              </div>
                          </div>

                          <input  type="hidden" name="id" value="{{$usuario->id}}">



                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Actualizar contraseña') }}
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
            </div>
          </div>
      </div>
  </div>

  @if (session('status'))
  <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <h4>{{ session('status') }}</h4>
          </div>
        </div>
     </div>
   </div>
  @endif

  <script>
   $(document).ready(function()
   {
      $("#mostrarmodal").modal("show");
   });
  </script>

@endsection
