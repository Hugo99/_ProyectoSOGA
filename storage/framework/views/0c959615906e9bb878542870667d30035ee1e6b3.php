<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="panel-title">Bienvenido a SOGA</h1>
                            <h2>Software de Gestión de Actividades</h2>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="<?php echo e(route('login')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group <?php echo e($errors->has('username') ? 'has-error' : ''); ?>">
                                    <label for="username">Username</label>
                                    <input class="form-control"
                                        type="text"
                                        name="username"
                                        value="<?php echo e(old('username')); ?>"
                                        placeholder="Ingresa nombre de usuario">
                                        <?php echo $errors->first('username', '<span class="help-block">:message</span>'); ?>

                                </div>
                                <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                                    <label for="password">Password</label>
                                    <input class="form-control"
                                        type="password"
                                        name="password"
                                        placeholder="Ingresa contraseña">
                                        <?php echo $errors->first('password', '<span class="help-block">:message</span>'); ?>

                                </div>
                                <button class="btn btn-primary btn-block">Acceder</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH /Users/hugoeguino/_ProyectoSOGA/_ProyectoSOGA/resources/views/auth/login.blade.php ENDPATH**/ ?>