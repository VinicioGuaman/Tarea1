<?php

// Función para calcular el factorial de un número
function factorial($num) {
    if ($num == 0 || $num == 1) {
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}

// Función para verificar si un número es primo
function esPrimo($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Función para calcular la serie matemática
function calcularSerie($num) {
    $resultado = 0;
    for ($i = 1; $i <= $num; $i++) {
        $resultado += pow($i, 2) / factorial($i);
    }
    return $resultado;
}

// Variable para almacenar la opción del menú
$opcion = '';

// Bucle principal del menú
while ($opcion != 'S') {
    // Desplegar el menú en pantalla
    echo "MENU\n";
    echo "=============\n";
    echo "1. FACTORIAL\n";
    echo "2. PRIMO\n";
    echo "3. SERIE MATEMATICA\n";
    echo "S. SALIR\n\n";

    // Recibir la opción del usuario
    echo "Ingrese una opción: ";
    $opcion = strtoupper(trim(fgets(STDIN)));

    switch ($opcion) {
        case '1':
            // Calcular el factorial de un número
            echo "Ingrese un número para calcular su factorial: ";
            $numero = intval(trim(fgets(STDIN)));
            echo "El factorial de $numero es: " . factorial($numero) . "\n";
            break;

        case '2':
            // Verificar si un número es primo
            echo "Ingrese un número para verificar si es primo: ";
            $numero = intval(trim(fgets(STDIN)));
            if (esPrimo($numero)) {
                echo "$numero es un número primo.\n";
            } else {
                echo "$numero no es un número primo.\n";
            }
            break;

        case '3':
            // Calcular la serie matemática
            echo "Ingrese el número de términos para la serie matemática: ";
            $numeroTerminos = intval(trim(fgets(STDIN)));
            echo "El resultado de la serie matemática es: " . calcularSerie($numeroTerminos) . "\n";
            break;
    }

    // Salir del bucle si la opción es 'S'
    if ($opcion == 'S') {
        break;
    }
}

?>
