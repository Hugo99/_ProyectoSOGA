<?php $__env->startSection('seccion'); ?>
<h1>Detalles de usuario</h1>
<h4><?php echo e($datos->name); ?></h4>
<h4><?php echo e($datos->email); ?></h4>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hugoeguino/_ProyectoSOGA/_ProyectoSOGA/resources/views/areas/area.blade.php ENDPATH**/ ?>