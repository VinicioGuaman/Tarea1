<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = [];

    // Validar entrada y obtener números fraccionarios
    for ($i = 1; $i <= 4; $i++) {
        $numero = $_POST["num$i"];

        if (!validarFraccionario($numero)) {
            echo "<p>Ingrese un número fraccionario válido para el número $i.</p>";
            exit;
        }

        $numeros[] = $numero;
    }

    // Calcular la expresión matemática
    $resultado = calcularExpresionMatematica($numeros);

    echo "<h3>Resultado de la expresión matemática:</h3>";
    echo $resultado;
}

function validarFraccionario($numero) {
    // Validar si es un número fraccionario válido
    // Implementa la lógica de validación según tus necesidades
    return true;
}

function calcularExpresionMatematica($numeros) {
    // Implementa el cálculo de la expresión matemática según tus necesidades
    return "Implementa la lógica de cálculo aquí";
}

?>
