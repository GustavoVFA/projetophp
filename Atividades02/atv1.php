<?php

    $cod=1; $valor=10; $res=0;

    switch($cod){
        case 1 :
            $res = $valor * 1.1;
            echo "Valor = $valor + 10% <br/>
            resultado = $res";
            break;
            
        case 3 :
            $res = $valor * 1.25;
            echo "Valor = $valor + 25% <br/>
            resultado = $res";
            break;

        case 4 :
            $res = $valor * 1.30;
            echo "Valor = $valor + 30% <br/>
            resultado = $res";
            break;
        
        case 8 :
            $res = $valor * 1.50;
            echo "Valor = $valor + 50% <br/>
            resultado = $res";
            break;

        

    };

?>