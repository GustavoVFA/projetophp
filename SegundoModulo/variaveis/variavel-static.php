<?php

    function exibir(){
        
        STATIC $ano; //definindo variavel estática
        $ano++;
        echo "<br/>".$ano;
    }

    echo exibir();
    echo exibir();
    echo exibir();
    echo exibir();

?>