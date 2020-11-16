<?php
    use Illuminate\Database\Capsule\Manager as DB;

    require 'vendor/autoload.php';
    require 'config/database.php';
    
    DB::table('calificacion')->insert([
        'calespañol' => $_POST['calespañol'],
        'calmate' => $_POST['calmate'],
        'calhistoria' => $_POST['calhistoria']
    ]);

    echo "<p>La calificación a sido guardada exitosamente</p><a href='asking.php'>Regresar a la página anterior</a>";