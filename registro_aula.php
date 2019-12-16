<html>
    <head>
        <title>Formulario de registro de aulas</title>
    </head>
    <body>
        <?php
            session_start();
            echo "Has iniciado con el usuario " .$_SESSION['Usuario1'];
        ?>
        <form action="index.html">
            <p>
                Nombre del aula:<br>
                <input type="text" name="nombreaula">
            </p>
            <p>
                Capacidad del aula:<br>
                <input type="text" name="capacidad">
            </p>
        </form>
    </body>
</html>