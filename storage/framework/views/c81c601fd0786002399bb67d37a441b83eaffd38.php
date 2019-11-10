<?php $__env->startSection('seccion'); ?>
<h1><?php echo e($datos->name_area); ?></h1>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header"><?php echo e(__('Registro actividad')); ?></div>
          <div class="card-body">

            <form method="POST" action="<?php echo e(route('subActividades')); ?>" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>

              <input  type="hidden" name="id_area" value="<?php echo e($datos->id); ?>">

              <div class="form-group">
                <label class="col-md-4 col-form-label"><?php echo e(__('Actividad')); ?></label>

                <div class="col-md-6">
                  <input class="form-control" type="text" name="actividad" value="">
                </div>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1" class="col-10 col-form-label"><?php echo e(__('Descripcion Actividad')); ?></label>

                <div>
                  <label class="col-form-label col-md-11" for="texto">
                     <textarea class="form-control" name="texto" data-required="true"></textarea>
                  </label>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-5" for=''>saleccione archivo</label>
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
</div>

<script type="text/javascript">
    alert(
        "RECOMENDACIONES:\n\n-Nombres de archivos deben de ir sin espacios\n-Los archivos que se suban como evidencias deben de ser en formato tipo PDF"
    );
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hugoeguino/_ProyectoSOGA/_ProyectoSOGA/resources/views//areas/area.blade.php ENDPATH**/ ?>