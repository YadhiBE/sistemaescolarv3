<?php
    use Illuminate\Database\Capsule\Manager as DB;

    require 'vendor\autoload.php';
    require 'config\database.php';
    
    $users = DB::table('usuarios')
    ->leftJoin('perfiles', 'usuarios.idperfil', '=', 'perfiles.idperfil')
    ->where('nombreusuario', $_POST['usuario'])
    ->first();

    $mensaje = '';
    if ($users->contraseña == $_POST['contraseña']){
        $mensaje = "<p>Bienvenido</p> <a href='asking.php'>Entrar al sistema escolar</a>";
    }
    else {
        $mensaje = "<p> Usuario y/o contaseña erroneos, por favor vuelva a identificarse </p><a href= 'index.html'>Regresar</a>";
    }

    echo $mensaje;