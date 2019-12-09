<!DOCTYPE html>
<html lang="es">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <title>Document</title>
        <style>
        h1{
        text-align: center;
        text-transform: uppercase;
        }
        .contenido{
        font-size: 20px;
        }
        #primero{
        background-color: #ccc;
        }
        #segundo{
        color:#44a359;
        }
        #tercero{
        text-decoration:line-through;
        }
        img {
          max-width: 800px
        }
    </style>
    </head>
    <body>
        <h1>Titulo de prueba</h1>
        <hr>
        <div class="contenido">
           <?php
            $area = $_GET['var'];
            $new = App\Actividades::all();
            $new = App\Actividades::where('id_area','=',$area)->paginate(10);
           ?>
           <?php $__currentLoopData = $new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $print): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <h1><?php echo e($print->actividad); ?></h1>
              <p><?php echo e($print->descripcion); ?></p>
              <?php
               $arch = App\Archivos::all();
               $arch = App\Archivos::where('id_act','=',$print->id)->paginate(10);
              ?>
              <?php $__currentLoopData = $arch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $verarch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $ver = $verarch->archivos; ?>

                <?php if(strpos($ver, 'pdf') !== false or strpos($ver, 'txt') !== false or strpos($ver, 'doc') !== false){ ?>
                      <embed data="<?php echo e(base_path()); ?>/public/Archivos/<?php echo e($ver); ?>">
                        <?php \PDF::setSourceFile("/public/Archivos/$ver");;  ?>
                <?php }else{ ?>
                        <img src="<?php echo e(base_path()); ?>/public/Archivos/<?php echo e($ver); ?>" align="middle">
                <?php  }?>

                <br>
                <br>
                <br>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <br>
              <br>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>


        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    </body>
</html>
<?php /**PATH /Users/hugoeguino/_ProyectoSOGA/_ProyectoSOGA/resources/views/pdf.blade.php ENDPATH**/ ?>