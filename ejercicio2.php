<?php
function sumaNumerosPares($array) {
    $suma = 0;
    foreach ($array as $numero) {
        if ($numero % 2 == 0) {
            $suma += $numero;
        }
    }
    return $suma;
}

$numeros = [1, 2, 3, 4, 5, 6];
echo "Suma de números pares: " . sumaNumerosPares($numeros);
?>
