<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["n"];

    // Validar entrada
    if (!is_numeric($n) || $n < 1 || $n > 50) {
        echo "<p>Ingrese un número entero positivo en el rango especificado.</p>";
    } else {
        // Calcular y mostrar la serie de Fibonacci
        $fibonacci = [1, 1];
        for ($i = 2; $i < $n; $i++) {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        echo "<h3>Serie de Fibonacci:</h3>";
        echo implode(", ", $fibonacci);
    }
}

?>
