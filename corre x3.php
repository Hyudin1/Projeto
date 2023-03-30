<?php
$altura = 1.80;
$sexo = 'f';

if ($sexo == 'f') {
    $resultado = (62.1 * $altura) - 44.7;
}

if ($sexo == 'm') {
    $resultado = (72.7 * $altura) - 58;
}

echo "O resultado para {$sexo}: é ($resultado)";


?>