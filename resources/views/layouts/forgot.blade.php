<h1>Hola {{ $user->name }}</h1>
<p>
    Porfavor da click en el botón para recuperar tu cuenta
    <a href="{{ url('reset_password'.$user->email.'/'.$code) }}">Recuperar cuenta</a>
</p>
