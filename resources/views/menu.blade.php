@extends('sideBar')

@section('title', 'Menú')

@section('seccion')
<style>
  .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 50px 50px;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
    width: 200px;
    height: 200px;
  }

  .button:hover {
    background-color: green;
  }

  html, body {
      width: 100%;
  }
  table {
      margin: 0 auto;
      margin-top: 13%;
  }
</style>

    <table style="width:75%">
    <tr>
        <th> <button class="button">Personal académico</button> </th>
        <th> <button class="button">Estudiantes</button> </th>
        <th> <button class="button">Plan de estudios</button> </th>
        <th> <button class="button">Evaluación de aprendzaje</button> </th>
        <th> <button class="button">Formación integral</button> </th>
      </tr>
      <tr>
        <th> <button class="button">Servicios de apoyo al aprendizaje</button> </td>
        <th> <button class="button">Vinculación-Extensión</button> </td>
        <th> <button class="button">Investigación</button> </td>
        <th> <button class="button">Infraestructura y equipamento</button> </td>
        <th> <button class="button">Gestión administrativa y financiamiento</button> </td>
    </tr>
    </table>
@endsection
