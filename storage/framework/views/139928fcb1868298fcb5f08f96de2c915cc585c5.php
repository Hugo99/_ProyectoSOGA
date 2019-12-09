<?php $__env->startSection('title', 'Perfil'); ?>

<?php $__env->startSection('seccion'); ?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Mis datos')); ?></div>

                  <div class="card-body">
                      <form method="POST" action="<?php echo e(route('perfilAct')); ?>">
                          <?php echo csrf_field(); ?>

                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nombre:')); ?></label>
                              <p class="col-md-4 col-form-label"><?php echo e($usuario->name); ?></p>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nombre de usuario:')); ?></label>
                              <p class="col-md-4 col-form-label"><?php echo e($usuario->username); ?></p>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-4 col-form-label text-md-right"><?php echo e(__('Correo electronico:')); ?></label>
                              <p class="col-md-4 col-form-label"><?php echo e($usuario->email); ?></p>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-4 col-form-label text-md-right"><?php echo e(__('Correo electronico:')); ?></label>
                              <?php $ar = App\Areas::find($usuario->id_area);?>
                                <p class="col-md-4 col-form-label"><?php echo e($ar['name_area']); ?></p>
                              <?php  ?>
                          </div>


                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Contraseña')); ?></label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

                                  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                      <span class="invalid-feedback" role="alert">
                                          <strong><?php echo e($message); ?></strong>
                                      </span>
                                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirmar contraseña')); ?></label>

                              <div class="col-md-6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              </div>
                          </div>

                          <input  type="hidden" name="id" value="<?php echo e($usuario->id); ?>">



                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      <?php echo e(__('Actualizar contraseña')); ?>

                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
            </div>
          </div>
      </div>
  </div>

  <?php if(session('status')): ?>
  <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <h4><?php echo e(session('status')); ?></h4>
          </div>
        </div>
     </div>
   </div>
  <?php endif; ?>

  <script>
   $(document).ready(function()
   {
      $("#mostrarmodal").modal("show");
   });
  </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hugoeguino/_ProyectoSOGA/_ProyectoSOGA/resources/views//perfil.blade.php ENDPATH**/ ?>