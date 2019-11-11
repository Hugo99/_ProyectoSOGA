<?php $__env->startSection('seccion'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Registra Area')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('registraAreas')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nombre del area*')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                <?php $__errorArgs = ['name'];
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

                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">

                                          </p>
                                          <div class="form-group row">
                                              <label class="col-md-5 col-form-label text-md-right"><?php echo e(__('Recomendacion')); ?></label>
                                              <div class="col-md-6">
                                                  <input id="recomendacion" class="form-control" name="recomendacion">

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
                                              <label class="col-md-5" align="right"><?php echo e(__('Descripción')); ?></label>
                                              <div class="col-md-6">
                                                <input id="descripcion" class="form-control" name="descripcion">
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <label class="col-md-5" align="right"><?php echo e(__('Metas')); ?></label>
                                              <div class="col-md-6">
                                                <input id="Metas" class="form-control" name="Metas">
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <label class="col-md-5" align="right"><?php echo e(__('Acciones')); ?></label>
                                              <div class="col-md-6">
                                                <input id="Acciones" class="form-control" name="Acciones">
                                              </div>
                                            </div>

                                          </div>
                                      </div>
                                  </div>
                              </div>

                          </div>

                        <button name="agregar" type="button">Agregar recomendacion</button>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Registrar')); ?>

                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</footer>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hugoeguino/_ProyectoSOGA/_ProyectoSOGA/resources/views//registraAreas.blade.php ENDPATH**/ ?>