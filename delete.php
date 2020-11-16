<?php
    use Illuminate\Database\Capsule\Manager as DB;

    require 'vendor/autoload.php';
    require 'config/database.php';

    DB::table('calificacion')->where('idcalificacion', $_GET['id'])->delete();

    echo "Se eliminó la calificacion con el ID: {$_GET['id']} <a class='button is-info is-rounded buton' href='consultar.php'>Regresar a pagina anterior</a>";