<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $option = $_POST["option"];
    $number = $_POST["number"];

    switch ($option) {
        case '1':
            // Calcular el factorial
            $result = calcularFactorial($number);
            echo "El factorial de $number es: $result";
            break;

        case '2':
            // Verificar si es primo
            $result = is_prime($number) ? "es primo" : "no es primo";
            echo "$number $result";
            break;

        case '3':
            // Calcular la serie matemática
            $result = calcularSerieMatematica($number);
            echo "La serie matemática es: $result";
            break;

        case 'S':
            // Salir
            echo "Saliendo del menú.";
            break;

        default:
            echo "Opción no válida.";
            break;
    }
}

function calcularFactorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        $resultado = 1;
        for ($i = 2; $i <= $n; $i++) {
            $resultado *= $i;
        }
        return $resultado;
    }
}

function is_prime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function calcularSerieMatematica($n) {
    $resultado = 0.0;

    for ($i = 1; $i <= $n; ++$i) {
        $resultado += pow(-1, $i) * pow($i, 2) / calcularFactorial($i);
    }

    return $resultado;
}

?>
