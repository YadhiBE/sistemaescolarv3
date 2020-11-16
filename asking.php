<?php
    use Illuminate\Database\Capsule\Manager as DB;

    require 'vendor\autoload.php';
    require 'config\database.php';


    $users = DB::table('usuarios')
    ->leftJoin('perfiles', 'usuarios.idperfil', '=', 'perfiles.idperfil')
    ->where('usuarios.nombreusuario', $_POST['usuario'])
    ->first();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet" href="node_modules\bulma\css\bulma.min.css">
</head>
<body>
    <p class="is-size-1-fullhd has-text-centered has-background-white">Sistema escolar</p><br>

    
    <?php if ($users->nombreperfil == 'Profesor') { ?>

        <a class="button is-primary m-6 is-rounded buton" href="calificar.php">Calificar</a>

        <a class="button is-primary m-6 is-rounded buton" href="consultar.php">Consultar</a>

    <?php } ?>


    <?php if ($users->nombreperfil == 'Alumno') { ?>

        <a class="button is-primary m-6 is-rounded buton" href="observar.php">Ver historial académico</a>

    <?php } ?>

</body>
</html>