<?php
// criação de variáveis
$n1 = 5;
$n2 = 9;
$n3 = 10;
$n4 = 10;

$media;
// validar as notas

if ($n1 <= 10) {    
    echo "n1 passou <br/>";
    if ($n2 <= 10) {
        echo "n2 passou <br/>";
        if ($n3 <= 10) {
            Echo "n3 passou <br/>";
            // valida quarta nota
            if ($n4 <= 10) {
                $média = ($n1 + $n2 + $n3 + $n4)/4;
                echo "[MENOR] A média do aluno é: {$média}<br/>";
            }
        }
    }
    
}

if ($n1 <= 10 AND $n2 <= 10 AND $n3 <= 10 AND $n4 <= 10) {
    $média = ($n1 + $n2 + $n3 + $n4)/4;
                echo " [MAIOR]A média do aluno é: {$média}";
    
}

?>