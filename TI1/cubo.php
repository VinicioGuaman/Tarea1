<?php

define('MAX', 1000000);

// Validar entrada
function sumaCubosDigitos($numero) {
    $digitos = str_split($numero);
    $sumaCubos = array_sum(array_map(function ($digito) {
        return pow((int)$digito, 3);
    }, $digitos));

    return $sumaCubos == $numero;
}

echo "<h3>Números entre 1 y ", MAX, " cuya suma de los cubos de sus dígitos es igual al número:</h3>";

for ($i = 1; $i <= MAX; $i++) {
    if (sumaCubosDigitos($i)) {
        echo $i, ", ";
    }
}

?>
