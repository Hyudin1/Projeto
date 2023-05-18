<?php
//a) crie uma lista vazia e adicione 3 nomes de pessoas.
$vetNome = [];
$vetNome = ['Renan', 'Grazi', 'Diego'];
//array_push($vetNome,'Renan', 'Grazi', 'Diego');
echo "<br>";
print_r($vetNome);
echo "<br>";

//b) Verifique se a lista está vazia.

if (empty ($vetNome)) {
   echo "<br>";
   echo "Lista vazia";
   echo "<br>";
} else {
    echo "<br>";
    echo "Lista preenchida!";
    echo "<br>";
}


//c) adicinar mais 2 nomes à lista
array_push($vetNome,'Sora', 'Shion');
echo "<br>";
print_r($vetNome);
echo "<br>";

//d) Remova o primeiro elemento da lista e imprima a lista resultante
array_shift($vetNome);
echo "<br>";
print_r ($vetNome);
echo "<br>";

//e) Ordene a lista em ordem alfabética e imprima-a.
sort($vetNome);
echo "<br>";
print_r($vetNome);
echo "<br>";



?>