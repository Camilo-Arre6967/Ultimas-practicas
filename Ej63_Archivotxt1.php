 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guardar informacion</title>
</head>
<body>
    <h2>guardar informacion en un archivo</h2>

<?php
    $nombre="Ana lopez";
    file_put_contents("alumnos.txt", $nombre . PHP_EOL, FILE_APPEND);
    echo "Informacion guardada correctamente";
    echo "<br><br>";
?>
<?php
    $nombre="Kenny Galindo";
    file_put_contents("alumnos.txt", $nombre . PHP_EOL, FILE_APPEND);
    echo "Informacion guardada correctamente";
    echo "<br><br>";
?>
<?php
echo "<br><br>";
echo "Informacion guardada correctamente";
$Contenido=file_get_contents("alumnos.txt");
echo nl2br($COntenido);
?>
</head>
</body>