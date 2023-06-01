<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuário</title>
</head>
<body>
    <h1> Cadastro de Usuário</h1>
 <form action="" method="post">
 <label for="">Nome</label><br>
 <input type="text" name="nome" id=""><br>


 <label for="text"></label>Sobrenome:</label><br>
 <input type="text" name="sobrenome" id=""><br>

 <label for="">Data do nascimento</label><br>
 <input type="date" name="datanasc" id=""><br>

 <label for="">Sexo</label><br>
 <select name="" id="">
 <option value=""></option>
 <option value="masculino">Masculino</option>
 <option value="feminino">Feminino</option>
 <option value="naodeclarado">Não declarado</option><br>

 </select>

 <br>   


 <input type="submit" value="Cadastrar">
 </form>

</body>
</html>

<?php
function validaCampos($dados){
    foreach ($dados as $key => $value) {
        echo "$key = $value <br>";
    
    }
}

echo validaCampos($_POST);

?>
