<?php
//a) Crie um vetor com 5 números inteiros
// e imprima o vetor completo


$vetNumeros = [1,2,3,4,5];
print_r($vetNumeros);

//b) calcular a soma de todos os elementos do vetor.
$soma = array_sum($vetNumeros);

echo "<br>Soma do valores do vetor = {$soma}";

//c) Encontre o maior elemento do vetor
$maior = max($vetNumeros);
echo "<br> Maior valor do vetor = {$maior}";

//Verifique se um determinado número está presente no vetor.

if(in_array(3,$vetNumeros)){
    echo "<br> Informações encontradas no vetor";
} else{
    echo "<br> Informações NÃO encontradas no vetor";
}

//Remova o último elemento do vetor e imprima o vetor resultante.
echo "<br> Removendo o último valor do vetor <br>";
array_pop($vetNumeros);
print_r($vetNumeros);




?>