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

@endsection
