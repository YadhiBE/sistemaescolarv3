<?php
    use Illuminate\Database\Capsule\Manager as DB;

    require 'vendor/autoload.php';
    require 'config/database.php';

    DB::table('calificaciones')
    ->where('idcalificacion', $_POST['idcalificacion'])
    ->update([
        'calespañol' => $_POST['calespañol'],
        'calmate' => $_POST['calmate'],
        'calhistoria' => $_POST['calhistoria'],
    ]);

    echo "<p>Se actualizó la calificacion</p> <a class='button is-info is-rounded buton' href='consultar.php'>Regresar a pagina anterior</a>";