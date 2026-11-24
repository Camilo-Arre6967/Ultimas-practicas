<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario de Juegos de Feria</title>
</head>
<body>
    <h2>INVENTARIO DE JUEGOS DE FERIA</h2>
    <form method="POST" action="">
        <?php
        for ($i = 0; $i < 3; $i++) {
            echo "Juego " . ($i + 1) . ": ";
            echo "<input type='text' name='juegos[$i][nombre]' required>" . " ";

            echo "Costo boleto: ";
            echo "<input type='number' step='0.01' name='juegos[$i][costo]' required>" . " ";

            echo "Boletos vendidos: ";
            echo "<input type='number' name='juegos[$i][vendidos]' required>";
            echo "<br><br>";
        }
        ?>
        <button type="submit" name="guardar" value="guardar">
            Guardar y calcular
        </button>
    </form>

    <?php
    if (isset($_POST['guardar'])) {
        $inventario = $_POST['juegos'];
        $recaudacionTotal = 0;

        for ($i = 0; $i < count($inventario); $i++) {
            $inventario[$i]['ingresos'] = $inventario[$i]['costo'] * $inventario[$i]['vendidos'];
            $recaudacionTotal += $inventario[$i]['ingresos'];
        }

        echo "<h3>REPORTE DE INVENTARIO</h3>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr>
                <th>Juego</th>
                <th>Costo Boleto</th>
                <th>Boletos Vendidos</th>
                <th>Ingresos Generados</th>
              </tr>";

        for ($i = 0; $i < count($inventario); $i++) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($inventario[$i]['nombre']) . "</td>";
            echo "<td>$" . number_format($inventario[$i]['costo'], 2) . "</td>";
            echo "<td>" . $inventario[$i]['vendidos'] . "</td>";
            echo "<td>$" . number_format($inventario[$i]['ingresos'], 2) . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        echo "<h3>RECAUDACIÓN TOTAL DE LA FERIA: $" . number_format($recaudacionTotal, 2) . "</h3>";
    }
    ?>
</body>
</html>