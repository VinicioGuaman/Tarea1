<?php

// Constantes
define('MIN', 0);
define('MAX', 10);

// Funciones
function mostrarMenu() {
    echo "\n=============================\n";
    echo "|         MENÚ PRINCIPAL         |\n";
    echo "|===========================|\n";
    echo "| 1. FACTORIAL                         |\n";
    echo "| 2. NÚMERO PRIMO             |\n";
    echo "| 3. SERIE MATEMÁTICA      |\n";
    echo "| S. SALIR                              |\n";
    echo "=============================\n";
    echo "Escoja una opción: ";
}

// Ingresa la opción desde la entrada estándar
mostrarMenu();
$opcion = strtoupper(readline());

// Validar la opción
switch ($opcion) {
    case '1':
        // Opción 1: Calcular el factorial
        echo "Ingrese un número para calcular el factorial (0 <= num <= 10): ";
        $numero = readline();

        if ($numero >= MIN && $numero <= MAX) {
            echo "\nEl factorial de $numero es: " . calcularFactorial($numero) . "\n";
        } else {
            echo "Error: El número debe estar entre " . MIN . " y " . MAX . "\n";
        }
        break;

    case '2':
        // Opción 2: Verificar si el número es primo
        echo "Ingrese un número para verificar si es primo (0 <= num <= 10): ";
        $numero = readline();

        if ($numero >= MIN && $numero <= MAX) {
            echo "\n$numero " . (esPrimo($numero) ? "es" : "no es") . " primo.\n";
        } else {
            echo "Error: El número debe estar entre " . MIN . " y " . MAX . "\n";
        }
        break;

    case '3':
        // Opción 3: Calcular la serie matemática
        echo "Ingrese un número para calcular la serie matemática: ";
        $numero = readline();

        if ($numero >= MIN && $numero <= MAX) {
            echo "\nEl resultado de la serie matemática es: " . calcularSerieMatematica($numero) . "\n";
        } else {
            echo "Error: El número debe estar entre " . MIN . " y " . MAX . "\n";
        }
        break;

    case 'S':
        // Salir del programa
        echo "\nSaliendo del programa. ¡Hasta luego!\n";
        break;

    default:
        // Opción no válida
        echo "\nOpción no válida. Inténtelo de nuevo.\n";
        break;
}


