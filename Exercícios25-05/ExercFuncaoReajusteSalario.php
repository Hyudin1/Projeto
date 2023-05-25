<?php
//criando uma função
function reajusteSalario($salario)
{
    $salminimo = 1550;
    if ($salario <= $salminimo) {
        $reajuste = $salario *1.1;
        return $reajuste;
    }

    if ($salario > $salminimo AND $salario <= ($salminimo * 3)) {
        $reajuste = $salario * 1.05;
        return $reajuste;
    }
    if ($salario > ($salminimo * 3)) {
        $reajuste = $salario * 1.03;
        return $reajuste;
    }
}
//chamando a função
echo" Salário reajustado é:" .reajusteSalario(5400);
?>