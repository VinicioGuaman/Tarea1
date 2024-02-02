<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $option = $_POST["option"];

    switch ($option) {
        case '1':
            // Opción 1: Fibonacci
            echo "<h2>Opción 1: Fibonacci</h2>";
            echo "<p>Ingrese un número entero positivo (1 <= N <= 50):</p>";
            echo '<form action="fibonacci.php" method="post">';
            echo '<input type="number" name="n" min="1" max="50" required>';
            echo '<input type="submit" value="Calcular">';
            echo '</form>';
            break;

        case '2':
            // Opción 2: Cubo
            echo "<h2>Opción 2: Cubo</h2>";
            echo "<p>Números enteros entre 1 y 1000000 cuya suma de los cubos de sus dígitos es igual al número:</p>";
            echo '<form action="cubo.php" method="post">';
            echo '<input type="submit" value="Mostrar">';
            echo '</form>';
            break;

        case '3':
            // Opción 3: Fraccionarios
            echo "<h2>Opción 3: Fraccionarios</h2>";
            echo "<p>Ingrese 4 números fraccionarios:</p>";
            echo '<form action="fraccionarios.php" method="post">';
            for ($i = 1; $i <= 4; $i++) {
                echo "<label for='num$i'>Número $i:</label>";
                echo "<input type='text' name='num$i' required>";
            }
            echo '<input type="submit" value="Calcular">';
            echo '</form>';
            break;

        case 'S':
            // Opción S: Salir
            echo "<h2>Saliendo del programa</h2>";
            break;

        default:
            echo "<p>Opción no válida.</p>";
            break;
    }
}

?>
