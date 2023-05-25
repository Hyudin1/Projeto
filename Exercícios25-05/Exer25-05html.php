
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Salário</title>
</head>
<body>
    <form action="" method="post"
        <h2>Calculadora de Reajuste</h2><br>
        <label for=""> Digite um salário</label>
        <input type="text" name="salario" id="">
        <input type="submit" value="Calcular">

</body>
</html>

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
if(isset($_POST ['salario']))
echo" <br> Salário: " .reajusteSalario(($_POST['salario']));
?>
