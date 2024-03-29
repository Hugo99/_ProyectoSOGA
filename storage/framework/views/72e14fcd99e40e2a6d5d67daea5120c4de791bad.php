<?php $__env->startSection('title', "Recomendación"); ?>

<?php $__env->startSection('seccion'); ?>
<style media="screen">
    .card {
        height: 380px;
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
                <div class="card-header"><?php echo e(__('Crear Recomendación')); ?></div>
                <form method="POST" action="<?php echo e(route('registraRecom')); ?>">
                <?php echo csrf_field(); ?>

                <p>

                <div class="form-group row">
                  <div class="col-md-3"></div>

                    <div class="col-3">
                      <label align="left">Saleccionar area:</label>
                    </div>

                    <div class="col-mb-5">
                      <select name="id_area" class="custom-select <?php $__errorArgs = ['area'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="id_area" required>
                          <?php $__currentLoopData = $area; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option name="$item->name_area" value="<?php echo e($item->id); ?>" class="form-control"><?php echo e($item->name_area); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </select>
                     </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-5 col-form-label text-md-right"><?php echo e(__('Recomendación')); ?></label>
                    <div class="col-md-6">
                        <input id="recomendacion" class="form-control" required name="recomendacion">

                        <?php $__errorArgs = ['username'];
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
                    <label class="col-md-5 col-form-label text-md-right" align="right"><?php echo e(__('Descripción')); ?></label>
                    <div class="col-md-6">
                      <input id="descripcion" class="form-control" required name="descripcion">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-5 col-form-label text-md-right" align="right"><?php echo e(__('Metas')); ?></label>
                    <div class="col-md-6">
                      <input id="Metas" class="form-control" required name="metas">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-5 col-form-label text-md-right" align="right"><?php echo e(__('Acciones')); ?></label>
                    <div class="col-md-6">
                      <input id="Acciones" class="form-control" required name="acciones">
                    </div>
                  </div>

                  <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                              <?php echo e(__('Agregar')); ?>

                          </button>
                      </div>
                  </div>

                </form>
              </div>
          </div>
      </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hugoeguino/_ProyectoSOGA/_ProyectoSOGA/resources/views//registraRecom.blade.php ENDPATH**/ ?>