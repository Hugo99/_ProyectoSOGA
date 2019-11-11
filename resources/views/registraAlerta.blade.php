@extends('sidebar')

@section('seccion')
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
                                <textarea id="mensaje" type="text" class="form-control" name="mensaje" ></textarea>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                          <select name="id_area" class="custom-select" id="id_area">
                            <option selected>Seleccione area</option>
                              @foreach ($area as $item)
                                <option value="{{$item->id}}">{{$item->name_area}}</option>
                              @endforeach
                           </select>
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
