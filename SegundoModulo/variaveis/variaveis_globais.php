<?php

    echo "<br/> ola seja bem vindo". $_SERVER['REMOTE_ADDR']. "<br/>";
    echo "<br/> voce esta utilizando o navegador: ". $_SERVER['HTTPS_USER_AGENT'];


    $ano = 2020;
    //implementação de uma função
    function exibir (){
        GLOBAL $ano; //denifinição da variável global
        $ano++;
        return $ano;
    }
    echo "<br/> Ano: ".$ano; 
    echo "<br/> Ano: ".exibir();
    echo "<br/> Ano: ".exibir();
    echo "<br/> Ano: ".$ano;
?>