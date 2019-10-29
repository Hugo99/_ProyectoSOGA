@extends('plantilla')

@section('secion')
  <h1 class="display-4">Usuarios</h1>

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Usuario</th>
        <th scope="col">Correo</th>
      </tr>
    </thead>
    <tbody>
      @foreach($nombres as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>
              <a href="{{route('nombre.detalle',$item)}}">{{$item->nombre}}</a>
            </td>
            <td>{{$item->user_neme}}</td>
            <td>{{$item->email}}</td>
          </tr>
      @endforeach
    </tbody>
  </table>

@endsection
