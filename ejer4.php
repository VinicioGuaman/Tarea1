<?php

// Prototipo de funciones
function calcularFactorial($num) {
    // Implementación del cálculo factorial
    $factorial = 1;

    for ($i = 1; $i <= $num; ++$i) {
        $factorial *= $i;
    }

    return $factorial;
}

function esPrimo($num) {
    // Implementación para verificar si el número es primo
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i <= $num / 2; ++$i) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

function calcularSerieMatematica($num) {
    // Implementación del cálculo de la serie matemática
    $resultado = 0.0;

    for ($i = 1; $i <= $num; ++$i) {
        $resultado += pow(-1, $i - 1) * pow($i, 2) / calcularFactorial($i);
    }

    return $resultado;
}

// Constantes
define('MIN', 0);
define('MAX', 10);

do {
    // Despliega el menú en pantalla
    echo "\nMENU\n";
    echo "=============\n";
    echo "1. FACTORIAL\n";
    echo "2. PRIMO\n";
    echo "3. SERIE MATEMATICA\n";
    echo "S. SALIR\n";

    // Ingresa la opción desde la entrada estándar
    echo "Escoja una opción: ";
    $opcion = readline();

    // Validar la opción
    switch ($opcion) {
        case '1':
            // Opción 1: Calcular el factorial
            echo "Ingrese un número para calcular el factorial (0 <= num <= 10): ";
            $numero = readline();

            if ($numero >= MIN && $numero <= MAX) {
                echo "El factorial de $numero es: " . calcularFactorial($numero) . "\n";
            } else {
                echo "Error: El número debe estar entre " . MIN . " y " . MAX . "\n";
            }
            break;

        case '2':
            // Opción 2: Verificar si el número es primo
            echo "Ingrese un número para verificar si es primo (0 <= num <= 10): ";
            $numero = readline();

            if ($numero >= MIN && $numero <= MAX) {
                echo "$numero " . (esPrimo($numero) ? "es" : "no es") . " primo.\n";
            } else {
                echo "Error: El número debe estar entre " . MIN . " y " . MAX . "\n";
            }
            break;

        case '3':
            // Opción 3: Calcular la serie matemática
            echo "Ingrese un número para calcular la serie matemática: ";
            $numero = readline();

            if ($numero >= MIN && $numero <= MAX) {
                echo "El resultado de la serie matemática es: " . calcularSerieMatematica($numero) . "\n";
            } else {
                echo "Error: El número debe estar entre " . MIN . " y " . MAX . "\n";
            }
            break;

        case 'S':
        case 's':
            // Salir del programa
            echo "Saliendo del programa. ¡Hasta luego!\n";
            break;

        default:
            // Opción no válida
            echo "Opción no válida. Inténtelo de nuevo.\n";
            break;
    }

} while ($opcion != 'S' && $opcion != 's');

