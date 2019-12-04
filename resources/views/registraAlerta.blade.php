@extends('sidebar')

@section('title', "Alerta")

@section('seccion')

<?php $per = Auth()->user()->id_area;
  if($per != 1){
    echo '<meta http-equiv="Refresh" content="0;URL=/menu">';
  }
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear alerta') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('registraAlerta') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Título') }}</label>

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
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Mensaje') }}</label>

                            <div class="col-md-6">
                                <textarea id="mensaje" type="text" class="form-control @error('mensaje') is-invalid @enderror" required name="mensaje"></textarea>

                                @error('mensaje')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

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


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Agregar Alerta') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
