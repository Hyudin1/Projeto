<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
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
        <label for="">Aceita os termos de cadastro:</label>
        <input type="checkbox" name="termo" id=""><br>

        <input type="submit" value="Cadastrar">

    </form>

    


</body>
</html>

<?php

echo validaCampos($_POST);

function validaCampos($dados)
{
    $cont = 0;
    if (isset ($dados['termo'])) {
        foreach ($dados as $key => $value) {
        
            if ($value == "") {
                $cont = $cont + 1;         
            }
        }
    } else {
        return 'Aceite os termos'
    }

    
    if ($cont > 0) {
        return 'Campos obrigatórios não preenchidos!';
    } else {
        return 'Campos preenchidos corretamente!';
    }
}

?>