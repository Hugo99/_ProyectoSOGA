@extends('sidebar')

@section('title', 'Menú')

@section('seccion')
<style>
  .button {
    background-color: #3695FF;
    border: none;
    color: black;
    padding:50px;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
    width: 200px;
    height: 200px;
  }

  .button:hover {
    background-color: #f1f1f1;
  }

  table {
      margin: 0 auto;
      margin-top: 5%;
  }
</style>

<?php $a = 1 ?>

    <table style="width:75%" align="right">
      <tbody>
        @foreach ($nombres as $item)
          <?php if ($item->id != 1): ?>
              <td>
                <a class="btn btn-default button" href="{{route('areas.area',$item)}}">{{$item->name_area}}</a>
                <?php $a++ ?>
              </td>
              <?php if ($a>5): ?>
                <tr>
                </tr>
                <?php $a=1 ?>
              <?php endif; ?>
          <?php endif; ?>
        @endforeach
      </tbody>
    </table>

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
