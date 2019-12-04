<?php $__env->startSection('title', $datos->name_area); ?>

<?php $__env->startSection('seccion'); ?>
<h1><?php echo e($datos->name_area); ?></h1>

<table class="table">
  <thead class="">
    <tr>
      <th scope="col">Recomendaciones</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Meta</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $recom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($item['recomendacion']); ?></th>
          <td><?php echo e($item['descripcion']); ?></td>
          <td><?php echo e($item['metas']); ?></td>
          <td><?php echo e($item['acciones']); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>


<?php $per = Auth()->user()->id_area; if ( $per == $datos->id || $per == 1): ?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header"><?php echo e(__('Registro de actividad')); ?></div>
            <div class="card-body">

              <form method="POST" action="<?php echo e(route('subActividades')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <input  type="hidden" name="id_area" value="<?php echo e($datos->id); ?>">

                <div class="form-group">
                  <label class="col-md-4 col-form-label"><?php echo e(__('Título')); ?></label>

                  <div class="col-md-6">
                    <input class="form-control" type="text" name="actividad" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1" class="col-10 col-form-label"><?php echo e(__('Descripción')); ?></label>

                  <div>
                    <label class="col-form-label col-md-11" for="texto">
                       <textarea class="form-control" name="texto" data-required="true" required></textarea>
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-5" for=''>Subir archivo</label>
                  <div class="col-md-10">
                    <input type="file" name='archivos' >
                  </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <button type="submit"  class="btn btn-primary">
                          Subir actividad
                        </button>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<table class="table">

  <thead class="">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Archivo</th>
    </tr>
  </thead>

  <tbody>
    <?php
          $activ = App\Actividades::find($datos->id);
          $activ = App\Actividades::where("id_area","=",$datos->id)->paginate(10);
     ?>
    <?php $__currentLoopData = $activ; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($item['id']); ?></th>
          <td><?php echo e($item['actividad']); ?></td>
          <td><?php echo e($item['descripcion']); ?></td>
          <td><a href="/archivo/descarga/<?php echo e($item['archivos']); ?>" target="_blank"><?php echo e($item['archivos']); ?></a></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>

</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hugoeguino/_ProyectoSOGA/_ProyectoSOGA/resources/views//areas/area.blade.php ENDPATH**/ ?>