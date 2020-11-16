<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema escolar</title>
    <link rel="stylesheet" href="node_modules\bulma\css\bulma.min.css">
</head>
<body>
<p class="is-size-1-fullhd has-text-centered has-background-white">Sistema escolar</p><br>

    <form action="insertar.php" method="post">

        <div class="has-text-centered">
            <a class="is-size-3-fullhd">Calificar al alumno:</a>
            <select class="is-size-4-fullhd" name="Alumno">
                <option class="is-size-4-fullhd" value="Alumno">Rodrigo</option>
            </select>
        </div>




        <section class="section has-background-light">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <article class="media notification is-info">
                            <div class="media-content">
                                <div class="content">
                                    <h1> Español</h1>
                                    <input id="calespañol" type="text" name="calespañol" placeholder="Insertar calificación">
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="column">
                        <article class="media notification is-primary">
                            <div class="media-content">
                                <div class="content">
                                    <h1> Matemáticas</h1>
                                    <input id="calmate" type="text" name="calmate" placeholder="Insertar calificación">
                              </div>
                         </article>
                     </div>
                    <div class="column">
                        <article class="media notification is-warning">
                            <div class="media-content">
                                <div class="content">
                                    <h1> Historia</h1>
                                    <input id="calhistoria" type="text" name="calhistoria" placeholder="Insertar calificación">
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <div class="has-text-centered">
            <button type="submit" class="button is-primary m-6">Guardar datos</button>
        </div>
    </form>
    
</body>
</html>