<?php
//a) criar uma lista vazia
// e adicione 3 nomes de pessoas
$vetoNome = ['Renan', 'Grazi', 'Diego'];
print_r($vetoNome);

//b) Verifique se a lista está vazia.

if (Empty($vetoNome)) {
    echo "<br>";
    echo "Sim é Empty";
    echo "<br>";
} else {
    echo "<br>";
    echo "Sim, não é Empty";
    echo "<br>";
}
//c) adicione mais 2 nomes à lista.
Array_push($vetoNome, ['Marcel', 'Lucas']);
print_r($vetoNome);

//d) Remove o primeir elemento da lista e imprima à lista resultante.
array_shift($vetoNome);

print_r($vetoNome);

//e) Ordene em ordem alfabética e imprima-á.
sort($vetoNome);
print_r($vetoNome);


 




?>