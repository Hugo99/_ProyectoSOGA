<?php $__env->startSection('title', 'Perfil'); ?>

<?php $__env->startSection('seccion'); ?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Mis datos')); ?></div>


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
                  <tr>
                      <td scope="row"><?php echo e($usuario->id); ?></th>
                      <td><?php echo e($usuario->name); ?></td>
                      <td><?php echo e($usuario->username); ?></td>
                      <td><?php echo e($usuario->email); ?></td>
                    <?php $ar = App\Areas::find($usuario->id_area);?>
                      <td><?php echo e($ar['name_area']); ?></td>
                    <?php  ?>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
      </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hugoeguino/_ProyectoSOGA/_ProyectoSOGA/resources/views//perfil.blade.php ENDPATH**/ ?>