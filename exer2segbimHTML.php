<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora Soma</h1>
    <form action="" method="post">
     <label for="numero1">Número 1:</label>

    <input type="number" id="numero1" name="numero1" required><br>


    <label for="numero2">Número 2:</label>

     <input type="number" id="numero2" name="numero2" required><br>


    <input type="submit" value="Calcular">
    </form>

</body>
</html>

<?php
if (isset($_POST['numero1'])AND isset($_POST['numero2'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $soma = $numero1 + $numero2;

    echo "<h2> A soma  dos números é: $soma</h2>";

}




?>