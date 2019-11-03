<?php $__env->startSection('seccion'); ?>
<h1><?php echo e($datos->name_area); ?></h1>

<form action="" method="POST">
  <?php echo csrf_field(); ?>

  <div class="form-group">
    <label class="">Actividad</label>
    <input class="form-control" type="text" name="actividad" value="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion Actividad</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFileLang" lang="es">
    <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
  </div>

  <div class="form-group">
    <button type="submit" name="btnAct" class="btn btn-primary"> Subir actividad </button>
  </div>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hugoeguino/_ProyectoSOGA/_ProyectoSOGA/resources/views//areas/area.blade.php ENDPATH**/ ?>