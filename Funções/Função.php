<?php

//criando uma função

function Somar()

{

     $a = 10;

    $b = 15;
    $result = $a + $b;

    echo "O resultado da soma é: $result<br>";

}


function Subtrair()

{

     $a = 100;

     $b = 50;

     $result = $a - $b;

    echo "O resultado da subtração é: $result<br>";

}

//função com parâmetros
function somarValores($a,$b)
{
    $resultado = $a + $b;
    echo "Resultado da adição com parâmetros: $resultado<br>";
}

//função com parâmetros e retorno de dados
function somarRecuperar($a,$b)
{
    $resultado = $a + $b;
    return $resultado;
}

//chamando uma função

Somar();

Subtrair();

//chamando função com parâmetros
somarValores(150,500);

//chamando uma função com parâmetros e capturando o resultado
$resultado = somarRecuperar(43,73);
echo "Resultado da soma recuperada: $resultado<br>";

?>