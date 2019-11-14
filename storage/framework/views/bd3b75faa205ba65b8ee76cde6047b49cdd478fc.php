<!DOCTYPE html>
<html lang="en">
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

    <title><?php echo $__env->yieldContent('title'); ?></title>
    <style>
    .toast-info {
      background-color: #2f96b4;
      background-image: url(https://github.com/iconic/open-iconic/blob/master/png/bell-2x.png?raw=true)!important;
    }

    .sidebar {
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
    }

    .sidebar a {
      display: block;
      color: black;
      padding: 16px;
      text-decoration: none;
    }

    .sidebar a.active {
      background-color: #4CAF50;
      color: white;
    }

    .sidebar a:hover:not(.active) {
      background-color: #3695FF;
      color: white;
    }

    div.content {
      margin-left: 200px;
      padding: 1px 16px;
      height: 1000px;
    }

    .caption {
     position: absolute;
     left: 0;
     width: 100%;
    }

    @media  screen and (max-width: 700px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }
      .sidebar a {float: left;}
      div.content {margin-left: 0;}
    }

    @media  screen and (max-width: 400px) {
      .sidebar a {
        text-align: center;
        float: none;
      }
    }
    </style>
  </head>
  <body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/menu')); ?>">
                    <?php echo e(config('SOGA', 'SOGA')); ?>

                </a>
            </div>

            <button class="fa fa-bell-o btn" type="button" id="notf">
            </button>

    </div>

    <?php $datos = App\alertas::all(); ?>

    <div class="caption" align="right">
      <?php foreach ($datos as $alerta): ?>
        <div class="toast" align="left" data-autohide="false" style="position: relative;">
          <div class="toast-header">
            <strong class="mr-auto text-primary"><?php echo e($alerta->nombre_alerta); ?></strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
          </div>
          <div class="toast-body">
            <?php echo e($alerta->mensaje_alerta); ?>

          </div>
        </div>
      <?php endforeach; ?>
    </div>


    <div class="">
        <div class="sidebar col-md-3" >
          <a href="/menu">Areas</a>
          <a href="/profesores">Profesores</a>
          <a href="/register">Registrar profesor</a>
          <a href="/registraAreas">Crear área</a>
          <a href="/registraRecom">Crear recomendación</a>
          <a href="/registraAlerta">Crear alerta</a>
          <!--<a href="#">Perfil</a>-->
          <form method="POST" action="<?php echo e(route('logout')); ?>">
              <?php echo e(csrf_field()); ?>

              <button  class="btn btn-danger btn-xs btn-block">Salir</button>
          </form>
        </div>

        <div class="container col-md-9">
          <div class="modal-body">
            <?php echo $__env->yieldContent('seccion'); ?>
          </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>

      const alerta = document.querySelector('#notf');

      alerta.addEventListener('click',() => {
        $(document).ready(function(){
          $('.toast').toast({delay: 2000});
          $('.toast').toast('show');
        });

      })
    </script>

  </body>
</html>
<?php /**PATH /Users/hugoeguino/_ProyectoSOGA/_ProyectoSOGA/resources/views/sidebar.blade.php ENDPATH**/ ?>