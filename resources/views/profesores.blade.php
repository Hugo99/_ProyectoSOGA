@extends('sidebar')

@section('seccion')
<style>

.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem;
}

.table th,
.table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #eceeef;
}

.table thead th {
  background-color: #3695FF;
  vertical-align: bottom;
  border-bottom: 2px solid #eceeef;
}
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>


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
                  @foreach($nombres as $item)
                      <tr>
                        <td scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->username}}</td>
                        <td>{{$item->email}}</td>
                        <?php $datos = App\Areas::findOrFail($item->id_area);?>
                          <td>{{$datos->name_area}}</td>
                        <?php  ?>
                      </tr>
                  @endforeach
                </tbody>
              </table>

            </div>
          </div>
      </div>
  </div>


@endsection
