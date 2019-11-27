<?php $__env->startSection('title', "Alertas"); ?>

<?php $__env->startSection('seccion'); ?>


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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Lista de profesores')); ?></div>


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
                  <?php $__currentLoopData = $alerta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td scope="row"><?php echo e($item->id); ?></th>
                        <td><?php echo e($item->nombre_alerta); ?></td>
                        <td><?php echo e($item->mensaje_alerta); ?></td>
                        <?php $datos = App\Areas::find($item->id_area);?>
                          <td><?php echo e($datos['name_area']); ?></td>
                        <?php  ?>
                        <td>
                          <a href="" class="fas fa-times button"></a>
                        </td>
                      </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>

            </div>
          </div>
      </div>
  </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hugoeguino/_ProyectoSOGA/_ProyectoSOGA/resources/views/alertas.blade.php ENDPATH**/ ?>