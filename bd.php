<?php
//criando um if para verificar se todos os componentes estão preenchidos corretamente no email
if ($_POST['email'] == $_POST['conf'] AND $_POST['senha'] == $_POST['confsenha']) {

    $pdo = new PDO('mysql:host=localhost;dbname=aulasphp');
    echo "Dados iguais!";
} else {
   echo "Os dados não são iguais!";
}



?>