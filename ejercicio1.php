<?php
function listaInvertida($array) {
    return array_reverse($array);
}

$numeros = [1, 2, 3, 4, 5];
print_r(listaInvertida($numeros));
?>
