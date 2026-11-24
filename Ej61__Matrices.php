<!DOCTYPE html>
<html lang="es">

<head>     
	<meta charset="UTF-8">     
	<title>Arreglos de operaciones
	</title> 
</head> 
<table border='1'cellpadding="5" cellspacing="1">
<body>
	<h2>OPERACIONES</h2>        
<form method="POST" action="">
<?php
$num = array();
$v=100;
$num2 = array();
$v2=500;
$num3 = array();

for ($f=0; $f < 5; $f++) { 
 	for ($c=0; $c <4 ; $c++) { 
 		$num[$f][$c]=$v; 
 		$v+=10;
 		$num2[$f][$c]=$v; 
 		$v2+=20;
 		$num3[$f][$c]=$num+$num2; 
 	}
} 
for ($i=0; $i < 5; $i++) { 
	echo "<tr>";
 	for ($j=0; $j <4 ; $j++) { 
 		echo "<td>".$num[$f][$c]=$v; 
 		$v+=10;
 		$num2[$f][$c]=$v; 
 		$v2+=20;
 		$num3[$f][$c]=$num+$num2;."</td>";
 	}
 	echo "</tr>";
} 
echo "</table>";
?>
</body>
</head>