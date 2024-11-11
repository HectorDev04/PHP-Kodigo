<?php
function piramideAsteriscos($altura) {
    for ($i = 1; $i <= $altura; $i++) {
        // Imprimir espacios
        echo str_repeat(' ', $altura - $i);
        
        // Imprimir asteriscos
        echo str_repeat('*', 2 * $i - 1);
        
        echo PHP_EOL;
    }
}

piramideAsteriscos(5);
?>
