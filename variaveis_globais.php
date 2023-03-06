<?php

    $ano = 2020;
    //implementação de uma função
    function exibir () {
        GLOBAL $ano; //denifinição da variável global
        $ano++;
        return $ano;
    }
    echo "<br/> Ano: ".$ano; 
    echo "<br/> Ano: ".exibir();
    echo "<br/> Ano: ".exibir();
    echo "<br/> Ano: ".$ano;
?>