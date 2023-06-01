<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulário com Caixa de Seleção</h1>
    <form action="" method="post">

    <label for="checkbox">Marque a caixa:</label>

    <input type="checkbox" id="checkbox" name="checkbox">
    <input type="submit" value="Enviar">

 </form>
   
</body>
</html>

<?php

function Verificar()
{

 if (isset($_POST['checkbox'])) {

    $marca = $_POST['checkbox'];

 return 'Marcado';

 } else {

 return 'Desmarcado';
 }

}

echo Verificar($_POST)

?>