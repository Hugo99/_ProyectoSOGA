<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <style media="screen">
        body {
            background-image: linear-gradient(purple, cyan);
            font-family: Arial, Helvetica, sans-serif;
            height: 712px;
        }
        .panel {
            width: 400px;
            height: 38%;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            border-top: 5px solid #ff656c;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .panel-title {
            text-align: center;
            color: #000;
            font-size: 18px;
            text-transform: uppercase;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .btn {
            width: 100%;
            height: 40px;
            background: #ff656c;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #e15960;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
            font-family: Montserrat;
            outline: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #ff7b81;
        }

        .help-block {
            font-size: 10px;
            color: red;
        }

        input[type=text], input[type=password] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
        }
    </style>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="panel-title">Bienvenido a SOGA</h1>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                                    <label for="username">Usuario</label>
                                    <input class="form-control"
                                        type="text"
                                        name="username"
                                        value="{{ old('username') }}"
                                        placeholder="Ingresa nombre de usuario">
                                        {!! $errors->first('username', '<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                    <label for="password">Contraseña</label>
                                    <input class="form-control"
                                        type="password"
                                        name="password"
                                        placeholder="Ingresa contraseña">
                                        {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
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
