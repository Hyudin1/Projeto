<?php
    //print_r($_POST);

    /* CONEXÃO COM O BANCO DE DADOS */
    $pdo = new PDO('mysql:host=localhost;dbname=exemplo','root','');

    /* PREPARAÇÃO PARA A GRAVAÇÃO */
    $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE email=? AND senha=?");

    /* ENVIA OS DADOS DE USUÁRIO E SENHA */
    $sql->execute(array($_POST['user'], $_POST['senha']));

    $result = $sql->fetchAll(PDO:: FETCH_ASSOC);
    // FETCH_ASSOC: é responsável por montar uma "árvore" para aderir valores para organizar os dados para reali
    //zar consultas

    //print_r($result);
    if (empty($result)) {
        session_start();
        $_SESSION['ok'] = "<div class='alert alert-danger' role='alert'>Usuário ou senha não encontrados</div>";
        echo "<meta http-equiv= 'refresh' content='0; URL=../index.php'/>";
    } else {
        session_start();
        /* INICIA A SESSÃO USUÁRIO E GUARDA O USUÁRIO ATIVO*/
        $_SESSION['usuario'] = $_POST['user'];
        echo "<meta http-equiv= 'refresh' content='0; URL=principal.php'/>";   
    }




?> 