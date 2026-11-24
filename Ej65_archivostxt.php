<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Captura de datos</title>
</head>
<body>
    <h2>Capturar datos de alumnos</h2>

    <!-- Formulario para capturar datos por teclado -->
    <form method="POST" action="">
        <label>Nombre del alumno:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Edad:</label><br>
        <input type="number" name="edad" required><br><br>

        <label>Pasatiempo:</label><br>
        <input type="text" name="pasatiempo" required><br><br>

        <input type="submit" name="guardar" value="Guardar información">
    </form>

    <br>

    <!-- Formulario para eliminar la información de los archivos -->
    <form method="POST" action="">
        <input type="submit" name="eliminar" value="Eliminar información de los archivos">
    </form>

    <hr>

    <?php
    // 1. Guardar información en los tres archivos txt
    if (isset($_POST['guardar'])) {
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $pasatiempo = $_POST['pasatiempo'];

        file_put_contents("alumnos.txt", $nombre . PHP_EOL, FILE_APPEND);
        file_put_contents("edades.txt", $edad . PHP_EOL, FILE_APPEND);
        file_put_contents("pasatiempos.txt", $pasatiempo . PHP_EOL, FILE_APPEND);

        echo "<strong>Información guardada correctamente.</strong><br><br>";
    }

    // 2. Eliminar información de los archivos de texto (los deja en blanco)
    if (isset($_POST['eliminar'])) {
        file_put_contents("alumnos.txt", "");
        file_put_contents("edades.txt", "");
        file_put_contents("pasatiempos.txt", "");

        echo "<strong>Información eliminada correctamente.</strong><br><br>";
    }

    // 3. Mostrar el contenido guardado de los tres archivos
    echo "<h3>Contenido guardado:</h3>";

    echo "<strong>Alumnos:</strong><br>";
    if (file_exists("alumnos.txt")) {
        $contenidoAlumnos = file_get_contents("alumnos.txt");
        echo nl2br($contenidoAlumnos);
    }

    echo "<br><strong>Edades:</strong><br>";
    if (file_exists("edades.txt")) {
        $contenidoEdades = file_get_contents("edades.txt");
        echo nl2br($contenidoEdades);
    }

    echo "<br><strong>Pasatiempos:</strong><br>";
    if (file_exists("pasatiempos.txt")) {
        $contenidoPasatiempos = file_get_contents("pasatiempos.txt");
        echo nl2br($contenidoPasatiempos);
    }
    ?>
</body>
</html>