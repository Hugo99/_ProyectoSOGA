

<?php $__env->startSection('title', 'Menú'); ?>

<?php $__env->startSection('seccion'); ?>
<style>
  .button {
    background-color: #3695FF;
    border: none;
    color: black;
    padding: 50px 50px;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
    width: 200px;
    height: 200px;
  }

  .button:hover {
    background-color: #f1f1f1;
  }

  .btn-grad{
    padding: 50px 50px;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
    width: 200px;
    height: 200px;
    background-image: linear-gradient(to right, #2b5876 0%, #4e4376 51%, #2b5876 100%)
  }

  .btn-grad:hover{
    background-position: right
    center;
  }

  html, body {
      width: 100%;
  }
  table {
      margin: 0 auto;
      margin-top: 13%;
  }
</style>

    <table style="width:75%" align="right">
    <tr>
        <th> <button type="button" class="button">Personal académico</button> </th>
        <th> <button type="button" class="button">Estudiantes</button> </th>
        <th> <button type="button" class="button">Plan de estudios</button> </th>
        <th> <button type="button" class="button">Evaluación de aprendzaje</button> </th>
        <th> <button type="button" class="button">Formación integral</button> </th>
      </tr>
      <tr>
        <th> <button type="button" class="button">Servicios de apoyo al aprendizaje</button> </td>
        <th> <button type="button" class="button">Vinculación-Extensión</button> </td>
        <th> <button type="button" class="button">Investigación</button> </td>
        <th> <button type="button" class="button">Infraestructura y equipamento</button> </td>
        <th> <button type="button" class="button">Gestión administrativa y financiamiento</button> </td>
    </tr>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hugoeguino/_ProyectoSOGA/_ProyectoSOGA/resources/views/menu.blade.php ENDPATH**/ ?>