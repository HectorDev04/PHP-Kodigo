<?php
function frecuenciaCaracteres($texto) {
    $frecuencia = [];
    $texto = str_replace(' ', '', strtolower($texto)); 

    for ($i = 0; $i < strlen($texto); $i++) {
        $caracter = $texto[$i];
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }

    return $frecuencia;
}

$texto = "Hola Mundo";
print_r(frecuenciaCaracteres($texto));
?>
