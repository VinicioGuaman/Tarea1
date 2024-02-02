<?php

// Constante simbólica para la opción de cubos
define('MAX', 1000000);

// Prototipo de funciones
function calcularFibonacci($n) {
    $fibonacci = array(1, 1);

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

function sumaCubosDigitos($num) {
    $digitos = str_split($num);
    $sumaCubos = 0;

    foreach ($digitos as $digito) {
        $sumaCubos += pow($digito, 3);
    }

    return $sumaCubos;
}

// Despliega el menú en pantalla
echo "MENU\n";
echo "=============\n";
echo "1. Fibonacci\n";
echo "2. Cubo\n";
echo "3. Fraccionarios\n";

// Ingresa la opción desde la entrada estándar
$opcion = readline("Escoja una opción: ");

// Validar la opción
if ($opcion < 1 || $opcion > 3) {
    echo "Opción no válida\n";
    exit;
}

switch ($opcion) {
    case 1:
        // Opción 1: Fibonacci
        $n = (int)readline("Ingrese un número entero positivo (1 <= N <= 50): ");

        // Validar el rango del número
        if ($n < 1 || $n > 50) {
            echo "Error: N debe estar entre 1 y 50\n";
            exit;
        }

        $fibonacci = calcularFibonacci($n);
        echo "Los primeros $n números de Fibonacci son: " . implode(", ", $fibonacci) . "\n";
        break;

    case 2:
        // Opción 2: Cubo
        echo "Números que cumplen con la condición:\n";

        for ($i = 1; $i <= MAX; $i++) {
            if (sumaCubosDigitos($i) == $i) {
                echo "$i\n";
            }
        }
        break;

    case 3:
        // Opción 3: Fraccionarios
        echo "Ingrese 4 números fraccionarios:\n";
        $a = readline("A: ");
        $b = readline("B: ");
        $c = readline("C: ");
        $d = readline("D: ");

        // Validar que los datos ingresados son números
        if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c) || !is_numeric($d)) {
            echo "Error: Ingrese números válidos\n";
            exit;
        }

        // Calcular la expresión matemática
        $resultado = $a + $b * $c - $d;
        echo "El resultado de la expresión A + B * C - D es: $resultado\n";
        break;
}


