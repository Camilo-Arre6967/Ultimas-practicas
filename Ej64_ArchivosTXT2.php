 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guardar informacion</title>
</head>
<body>
    <h2>guardar informacion en un archivo</h2>

</h2>Guardar informacion en un archivo</h2>

<?php
$Nombre="Mario Castañeda";
file_put_contents("Alumnos.txt", $Nombre.PHP_EOL,FILE_APPEND); echo "Informacion guardada correctamente"; echo "<br><br>";
?>

<?php
	echo "<br><br>":
	$Nombre="Gerardo Reyero";
	file_put_contents ("Alumnos.txt", $Nombre.PHP_EOL, FILE_APPEND); 
	echo "Alumno/a guardado exitosamente":
?>
<?php
	echo "<br><br>"; SContenido=file_get_contents("alumnos.txt"); 
	echo nL2br($Contenido);
?>
</body> 
</html>