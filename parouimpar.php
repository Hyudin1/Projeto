<?php

$escolhaUsuario = 'par';
$valorUsuario = 2;
$valorPc;

//verifica se a escolha é par ou ímpar
if ($escolhaUsuario == 'par' OR $escolhaUsuario == 'ímpar' OR $escolhaUsuario == 'impar') {

    //verificar se é um número entre 0 e 10
    if (is_numeric ($valorUsuario) AND $valorUsuario >= 0 AND $valorUsuario <= 10) {
        //adicionar n aleatório para o PC
        $valorPc = random_int(0,10);
        $resultado = $valorPC = $valorUsuario;

        echo "$valorUsuario + $valorPC = $resultado";

        //verificar se é par ou ímpar        
        if (($resultado % 2) == 0) {
        

        //verifica se o usuário ganhou
        if ($escolhaUsuario == 'par') {
            echo "Parabéns!!! Você Ganhou!!!";
        } else {
            echo "Perdeu!!! Talvez você ganhe na próxima!";
        }


      }  else {
        
        //verificar se o usuário
            if($escolhaUsuario == 'ímpar' OR $escolhaUsuario == 'impar'){
                echo "Você ganhou!";
            } else {
                echo " Você perdeu!";
            }
      }

    } else {
        echo "Número inválido! Insira um número entre 0 a 10";
    }


} else {
    echo "Escolha inválida! Digite par ou ímpar";

}












?>