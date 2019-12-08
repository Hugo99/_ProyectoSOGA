@extends('sidebar')

@section('title', 'Perfil')

@section('seccion')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mis datos') }}</div>


              <table class="table">
                <thead class="">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Area</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td scope="row">{{$usuario->id}}</th>
                      <td>{{$usuario->name}}</td>
                      <td>{{$usuario->username}}</td>
                      <td>{{$usuario->email}}</td>
                    <?php $ar = App\Areas::find($usuario->id_area);?>
                      <td>{{$ar['name_area']}}</td>
                    <?php  ?>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
      </div>
  </div>

@endsection
