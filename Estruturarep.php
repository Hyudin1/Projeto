<?php

$tabuada = 5;
$contador = 0;

//criador de tabuada
while ($contador<= 10) {
    $resultado = $tabuada * $contador;
    echo "{$tabuada} x {$contador} = {$resultado} <br/> ";
    $contador = $contador + 1;
}




?>