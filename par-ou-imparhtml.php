<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou ímpar</title>
    <link rel="Stylesheet" href="styles.css"
</head>
<body>
<h1 style ="border:01px solid red">Jogo do Par ou Ímpar</h1>    
    <form method="post" action="">
        <label for="Escolha">Par ou Ímpar?</label><br>
        <input type="text" name="Escolha" id="Escolha"><br/>

        <label for="Número"></label>Qual número você vai jogar?</label><br>
        <input type="number" name="Número" id="Número"><br/>

        <img src="https://m.media-amazon.com/images/I/51CPicgDMhL.png" alt="cj" width="250" height="250">

        <input type="submit" value="Enviar Dados"><br>

    </form>
</body> 
</html>

<?php

foreach ($_POST as $key => $value) {
    echo "$key - $value <br>";
}
?>

<?php
$escolha = $_POST ['Escolha'];
$valorUsu = $_POST ['Número'];
$valorPc = random_int(0,10);
$resultado = $valorPc + $valorUsu;

if ($escolha == 'par' OR $escolha == 'ímpar'OR $escolha == 'impar'){
    if(is_numeric($valorUsu)AND $valorUsu >= 0 AND $valorUsu <= 10) {


        if($resultado % 2 == 0){

            if ($escolha == 'par'){
                echo "Você ganhou!<br>";
            } else {
                echo "Você Perdeu!<br>";
            }
        } else{
          if ($escolha == 'impar' OR $escolha == 'ímpar'){
            echo "Você Ganhou!!!<br>";
          } else {
            echo "Você Perdeu!!<br>";
          }
        }
    } else{
        echo "Número Inválido! insira um número de 0 a 10<br>";
    }
} else {
    echo "Escolha entre Par ou Ímpar<br>";
} 
echo "A máquina jogou $valorPc";

?>

