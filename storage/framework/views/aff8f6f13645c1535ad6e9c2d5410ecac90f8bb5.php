<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Olvidé la contraseña</title>
    </head>
    <body>
        <style media="screen">
            body{
                background-image: linear-gradient(purple, cyan);
                position: absolute;
                top:0;
                bottom: 0;
                left: 0;
                right: 0;
                margin: auto;
                width: 50%;
                height: 40%;
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
                font-family: Arial, Helvetica, sans-serif;
            }
            .profilepress-reset-status {
                width: 400px;
                text-align: center;
                background-color: #e74c3c;
                color: #ffffff;
                border: medium none;
                border-radius: 4px;
                font-size: 17px;
                font-weight: normal;
                line-height: 1.4;
                padding: 8px 5px;
                margin: auto;
            }

            .memo-reset-success {
                width: 400px;
                text-align: center;
                background-color: #2ecc71;
                color: #ffffff;
                border: medium none;
                border-radius: 4px;
                font-size: 17px;
                font-weight: normal;
                line-height: 1.4;
                padding: 8px 5px;
                margin: auto;
            }

            #sc-password {
                background: #f0f0f0;
                width: 400px;
                margin: 0 auto;
                margin-top: 8px;
                margin-bottom: 2%;
                transition: opacity 1s;
                -webkit-transition: opacity 1s;
            }

            #sc-password h1 {
                background: #ff656c;
                padding: 20px 0;
                font-size: 140%;
                font-weight: 300;
                text-align: center;
                text-transform: uppercase;
                color: #fff;
            }

            div#sc-password .sc-container {
                background: #f0f0f0;
                padding: 6% 4%;
                border-radius: 5px;
            }

            div#sc-password input[type="email"],
            div#sc-password input[type="text"],
            div#sc-password input[type="password"] {
                width: 92%;
                background: #fff;
                margin-bottom: 4%;
                border: 1px solid #ccc;
                padding: 4%;
                font-family: 'Open Sans', sans-serif;
                font-size: 95%;
                color: #555;
                border-radius: 5px;
            }

            div#sc-password button[type="submit"] {
                width: 100%;
                background: #ff656c;
                box-sizing: border-box;
                border-radius: 5px;
                border: 1px solid #e15960;
                padding: 4%;
                font-family: Montserrat;
                text-transform: uppercase;
                font-weight: bold;
                font-size: 100%;
                color: #fff;
                cursor: pointer;
            }

            div#sc-password button[type="submit"]:hover {
                background: #ff7b81;
            }
        </style>
        <div id="sc-password">
            <h1>Recuperar contraseña</h1>
            <div class="sc-container">
                <form action="<?php echo e(url('/olvide_password')); ?>" method="post">

                    <?php echo e(csrf_field()); ?>


                    <?php if(session('error')): ?>
                        <div>
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>

                    <?php if(session('success')): ?>
                        <div>
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    <input type="email" name="email" id='email' placeholder="Introduzca su correo">
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </body>
</html>
<?php /**PATH /Users/hugoeguino/_ProyectoSOGA/_ProyectoSOGA/resources/views/auth/passwords/reset.blade.php ENDPATH**/ ?>