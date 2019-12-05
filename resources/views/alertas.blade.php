@extends('sidebar')

@section('title', "Alertas")

@section('seccion')


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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

<?php $per = Auth()->user()->id_area;
  if($per != 1){
    echo '<meta http-equiv="Refresh" content="0;URL=/menu">';
  }
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de alertas') }}</div>


              <table class="table">
                <thead class="">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Mensaje</th>
                    <th scope="col">Area</th>
                    <th scope="col">Borrar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($alerta as $item)
                      <tr>
                        <td scope="row">{{$item->id}}</th>
                        <td>{{$item->nombre_alerta}}</td>
                        <td>{{$item->mensaje_alerta}}</td>
                        <?php $datos = App\Areas::find($item->id_area);?>
                          <td>{{$datos['name_area']}}</td>
                        <?php  ?>
                        <td>
                            <form action="/alertas/{{$item->id}}/elimina" method="post">
                              {{method_field('DELETE')}}
                              {{csrf_field()}}
                              <button type="submit" class="btn fas fa-times"></button>
                            </form>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>

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
