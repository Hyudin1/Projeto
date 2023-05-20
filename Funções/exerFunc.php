<?php
// criando uma função com parâmetro (soma)
function calcular($a,$b,$operação)
{
    if ($operação == 'soma') {
        $resultado = $a + $b;
        return $resultado;
    }
}

$resultado = calcular(30,10,'soma');
echo "O resultado da operação é: $resultado<br>";

//criando uma função com parâmetro (subtração)
function subtrair($a,$b,$operação)
{
    if ($operação == 'subtração') {
        $resultado = $a - $b;
        return $resultado;
    }
}
$resultado = subtrair(30,10,'subtração');
echo "O resultado da operação de subtração é: $resultado<br>";

//criando uma função com parâmetro (multiplicação)
function multi($a,$b,$operação)
{
    if ($operação == 'Multiplicar') {
        $resultado = $a * $b;
        return $resultado;
    }
}
$resultado = multi(30,10,'Multiplicar');
echo "O resultado da operação de multiplicação é: $resultado<br>";











?>