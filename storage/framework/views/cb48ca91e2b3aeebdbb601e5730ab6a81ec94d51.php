

<?php $__env->startSection('title', 'Menú'); ?>

<?php $__env->startSection('seccion'); ?>
<style>
  .button {
    background-color: #3695FF;
    border: none;
    color: black;
    padding:50px;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
    width: 200px;
    height: 200px;
  }

  .button:hover {
    background-color: #f1f1f1;
  }

  table {
      margin: 0 auto;
      margin-top: 5%;
  }
</style>

<?php $a = 1 ?>

    <table style="width:75%" align="right">
      <tbody>
        <?php $__currentLoopData = $nombres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td>
              <a class="btn btn-default button" href="<?php echo e(route('areas.area',$item)); ?>"><?php echo e($item->name_area); ?></a>
              <?php $a++ ?>
            </td>
            <?php if ($a>5): ?>
              <tr>
              </tr>
              <?php $a=1 ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hugoeguino/_ProyectoSOGA/_ProyectoSOGA/resources/views/menu.blade.php ENDPATH**/ ?>